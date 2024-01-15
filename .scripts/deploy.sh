set -e

echo "Deployment started ..."
# Enter maintenance mode or return true
# if already is in maintenance mode
(docker compose run --rm artisan down || true)

# Pull the latest version of the app
git pull origin production

# Install composer dependencies
docker compose run --rm composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
docker compose run --rm artisan clear-compiled

# Recreate cache
docker compose run --rm artisan optimize

# Compile npm assets
docker compose run --rm npm run build

# Run database migrations
docker compose run --rm artisan migrate --force

# Exit maintenance mode
docker compose run --rm artisan up

echo "Deployment finished!"
