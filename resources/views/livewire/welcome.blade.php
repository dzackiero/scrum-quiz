<div>
    <header>
        <nav class="p-4 shadow-sm">
            <h1 class="text-lg sm:text-lg md:text-xl font-semibold overflow-ellipsis">Instumen Penilaian Scrum Tim
                Development</h1>
        </nav>
    </header>

    @if ($step == 0)
        {{-- First Screen --}}
        <main class="pt-12 px-2 flex flex-col gap-4 items-center">
            <div class="p-6 border rounded-md max-w-screen-sm w-full flex flex-col gap-6 bg-white shadow-md">
                <h3 class="text-xl text-center font-medium">Masukkan Data Diri</h3>
                <x-input label="Name" wire:model="name" placeholder="Nama Lengkap" />
                <x-input label="Posisi" wire:model="position" placeholder="Posisi" />
                <x-button md primary wire:click="nextStep" label="Mulai Penilaian" />
            </div>
        </main>
    @else
        {{-- Question Screen --}}

        <main class="p-4 md:p-8">
            <div class="relative py-4 items-center hidden sm:flex justify-evenly">
                <div class="absolute top-1/2 left-0 right-0 h-1 -z-10 bg-gray-300"></div>
                @foreach ($questions as $index => $question)
                    <x-step-button :step="$index" :currentStep="$step" />
                @endforeach
            </div>

            <div class="flex flex-col gap-4 p-8">
                <h1 class="font-semibold text-lg">{{ $step }}. {{ $questions[$step] }}</h1>
                @foreach ($answers[$step] as $i => $answer)
                    <label for="{{ $step }}-{{ $i }}"
                        class="flex justify-between items-center gap-8 p-4 border rounded-sm">
                        <h1>{{ $answer['text'] }}</h1>
                        <x-checkbox md id="{{ $step }}-{{ $i }}"
                            wire:model="answers.{{ $step }}.{{ $i }}.state" />
                    </label>
                @endforeach
            </div>

            <div class="flex justify-between">
                <x-button md primary outline wire:click="prevStep" label="Sebelumnya" />
                <x-button md primary wire:click="nextStep" label="Selanjutnya" />
            </div>
        </main>
    @endif

    {{-- Modal --}}
    <x-modal wire:model.defer="modal">
        <x-card title="Consent Terms">
            <p class="text-gray-600">
                Lorem Ipsum...
            </p>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" wire:click="$toggle('modal')" />
                    <x-button primary label="I Agree" wire:click="deleteResult" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>

</div>
