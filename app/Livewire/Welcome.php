<?php

namespace App\Livewire;

use App\Models\Result;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class Welcome extends Component
{

    public int $step = 1;
    public float $total = 0;

    #[Validate('required|min:3')]
    public string $name = "";

    #[Validate('required|min:3')]
    public string $position = "";

    public array $questions = [
        1 => "Kemampuan melakukan pengembangan pengetahuan tentang produk",
        2 => "Kemampuan memfasilitasi pengembangan pengetahuan tentang produk",
        3 => "Kemampuan merakit Definition of Done (DoD) yang efektif",
        4 => "Kemampuan membuat product increment sehingga bisa menghasilkan suatu nilai",
        5 => "Kemampuan memberi pertimbangan pemilihan alat dan teknologi umum",
        6 => "Kemampuan memfasilitasi re-platforming, pertimbangan keamanan dengan kepemimpinan teknologi",
        7 => "Kemampuan mengkreasikan praktik Scrum yang disesuaikan dengan alokasi kerja terdistribusi",
        8 => "Kemampuan mengadaptasi jam kerja untuk mendapatkan efisiensi dari konsep Follow the Sun (FTS)",
        9 => "Kemampuan menggunakan teknik komunikasi sinkronous dan asinkronous dalam konteks global",
        10 => "Kemampuan menggunakan tulisan maupun percakapan yang jelas dan fasih dalam bahasa asing untuk berkomunikasi dengan tim yang berbeda budaya dan kepribadian",
    ];

    public array $answers = [
        1 => [
            [
                "state" => false,
                "text" => "Memahami secara menyeluruh dan mendalam kebutuhan pengguna, tujuan bisnis, fitur dan fungsionalitas produk yang sedang dikembangkan",
                "value" => 2.51
            ],
            [
                "state" => false,
                "text" => "Aktif melakukan riset pasar, menganalisis tren industri, dan mengumpulkan informasi terkini terkait produk",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Tajam dalam merinci kebutuhan dan peluang pengembangan berdasarkan pengetahuan yang diperoleh",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Mengintegrasikan pengetahuan produk ke dalam siklus pengembangan",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Menghubungkan informasi dengan tindakan konkrit, seperti perancangan fitur atau pengembangan solusi yang relevan",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Menggunakan metrik kinerja produk untuk mengevaluasi keberhasilan dan menentukan arah pengembangan selanjutnya",
                "value" => 2.18
            ],
            [
                "state" => false,
                "text" => "Responsif dan cepat menyesuaikan strategi pengembangan dan mengambil tindakan yang diperlukan terhadap perubahan kebutuhan pasar atau umpan balik pengguna terkait produk",
                "value" => 2.43
            ],
        ],
        2 => [
            [
                "state" => false,
                "text" => "Mengidentifikasi dan memperdalam pengetahuan produk yang relevan dan secara efektif membagikannya di dalam tim",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Menggunakan teknik pengembangan seperti merancang prototipe untuk menggali lebih dalam pengetahuan produk",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Tidak hanya memahami produk secara teoritis tetapi juga mampu mengaplikasikan konsep-konsep tersebut dalam konteks nyata melalui pembuatan prototipe",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Terlibat aktif dalam proses pengembangan produk dan berkontribusi pada diskusi strategis terkait arah pengembangan produk",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Terlibat dan berkontribusi dalam membuat keputusan terkait pengembangan produk, menunjukkan pemahaman yang mendalam tentang produk dan visi bisnis",
                "value" => 2.35
            ],

        ],
        3 => [
            [
                "state" => false,
                "text" => "Memastikan bahwa DoD mencakup aspek keamanan dan kualitas yang memadai untuk memastikan bahwa setiap increment produk memenuhi standar keamanan dan kualitas yang ditetapkan",
                "value" => 2.51
            ],
        ],
        4 => [
            [
                "state" => false,
                "text" => "Berkomunikasi aktif dengan pelanggan dan pemangku kepentingan untuk memahami kebutuhan mereka",
                "value" => 2.6
            ],
            [
                "state" => false,
                "text" => "Menyampaikan hasil kerja secara teratur, menciptakan transparansi dalam proses pengembangan",
                "value" => 2.6
            ],
            [
                "state" => false,
                "text" => "Merespons perubahan kebutuhan atau umpan balik pelanggan dengan cepat dan efektif",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Mengadaptasi 'product increment' berdasarkan perubahan kondisi atau harapan pelanggan",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Memahami nilai bisnis dari setiap 'product increment' yang dihasilkan",
                "value" => 2.35
            ],
        ],
        5 => [
            [
                "state" => false,
                "text" => "Menilai kesesuaian alat dan teknologi untuk kebutuhan proyek atau tugas pengembangan yang spesifik",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Memberikan pertimbangan yang cerdas dan relevan dalam pemilihan alat dan teknologi berdasarkan tujuan proyek dan kebutuhan bisnis dari aspek skalabilitas dan efisiensi",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Memilih solusi yang tidak hanya sesuai dengan kebutuhan saat ini tetapi juga dapat berkembang seiring waktu tanpa mengorbankan kinerja atau keefisienan",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Mengevaluasi keberlanjutan alat dan teknologi yang dipilih serta tingkat dukungan yang tersedia dari komunitas atau penyedia",
                "value" => 2.43
            ],
        ],
        6 => [
            [
                "state" => false,
                "text" => "Mengidentifikasi dan merinci kebutuhan re-platforming secara komprehensif",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Memasukkan pertimbangan keamanan dalam proses re-platforming",
                "value" => 2.60
            ],
            [
                "state" => false,
                "text" => "Mengidentifikasi potensi risiko keamanan, menerapkan praktik keamanan terbaik, dan memastikan bahwa re-platforming tidak mengorbankan keamanan sistem",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Mengidentifikasi, mengelola, dan merinci risiko terkait re-platforming, serta mempertimbangkan dampak bisnis yang mungkin terjadi selama dan setelah proses migrasi",
                "value" => 2.5
            ],
            [
                "state" => false,
                "text" => "Memimpin dan memfasilitasi re-platforming dengan memastikan adopsi teknologi yang tepat, koordinasi yang efektif antar tim, dan komunikasi yang baik dengan pihak-pihak terkait",
                "value" => 2.26
            ],
        ],
        7 => [
            [
                "state" => false,
                "text" => "Mengkreasikan dan mengadaptasi praktik-praktik Scrum ke dalam konteks alokasi kerja terdistribusi",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Membuat penyesuaian yang diperlukan dalam tahapan Scrum, seperti sprint planning, daily scrum, dan sprint review, untuk mendukung keberhasilan tim yang tersebar",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Memilih, mengonfigurasi, dan menggunakan alat dan teknologi kolaboratif dengan efektif untuk mendukung komunikasi dan koordinasi antar anggota tim yang berlokasi di lokasi yang berbeda",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Memberikan pemantauan dan transparansi yang cukup terhadap progres pekerjaan, terutama dalam situasi alokasi kerja yang terdistribusi",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Melakukan refleksi reguler, menerima umpan balik, dan menggabungkan pembelajaran mereka ke dalam proses kerja secara berkelanjutan",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Menyediakan metrik dan laporan yang relevan serta dapat diakses oleh semua anggota tim",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Mengidentifikasi dan mengelola risiko yang terkait dengan alokasi kerja terdistribusi, seperti perbedaan waktu, budaya, atau hambatan komunikasi",
                "value" => 2.43
            ],
        ],
        8 => [
            [
                "state" => false,
                "text" => "Memastikan komunikasi yang efektif dan sinkronisasi antaranggota tim yang berada di zona waktu yang berbeda",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Menggunakan alat komunikasi dan kolaborasi secara efisien, seperti penggunaan platform virtual dan rapat sinkronisasi yang terjadwal",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Cepat menanggapi perubahan kondisi, seperti perubahan kebutuhan atau jadwal, dan tetap efisien dalam menerapkan perubahan tersebut di seluruh tim global",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Memahami dinamika pekerjaan dan kehidupan anggota tim yang berada di zona waktu yang berbeda, menciptakan lingkungan kerja yang inklusif dan mendukung",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Memastikan komunikasi yang efektif dan sinkronisasi antaranggota tim yang berada di zona waktu yang berbeda",
                "value" => 2.43
            ],
            [
                "state" => false,
                "text" => "Menggunakan alat komunikasi dan kolaborasi secara efisien, seperti penggunaan platform virtual dan rapat sinkronisasi yang terjadwal",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Cepat menanggapi perubahan kondisi, seperti perubahan kebutuhan atau jadwal, dan tetap efisien dalam menerapkan perubahan tersebut di seluruh tim global",
                "value" => 2.35
            ],
            [
                "state" => false,
                "text" => "Memahami dinamika pekerjaan dan kehidupan anggota tim yang berada di zona waktu yang berbeda, menciptakan lingkungan kerja yang inklusif dan mendukung",
                "value" => 2.35
            ],
        ],
        9 => [
            [
                "state" => false,
                "text" => "Memastikan kesinambungan informasi di platform asynchronous, memastikan bahwa anggota tim yang berbeda waktu masih dapat mengakses informasi terkini dan konteks proyek",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Menciptakan lingkungan kolaboratif yang memungkinkan partisipasi aktif dan pemahaman bersama di antara anggota tim yang tersebar secara global",
                "value" => 2.51
            ],
        ],
        10 => [
            [
                "state" => false,
                "text" => "Memastikan kesinambungan informasi di platform asynchronous, memastikan bahwa anggota tim yang berbeda waktu masih dapat mengakses informasi terkini dan konteks proyek",
                "value" => 2.26
            ],
            [
                "state" => false,
                "text" => "Menciptakan lingkungan kolaboratif yang memungkinkan partisipasi aktif dan pemahaman bersama di antara anggota tim yang tersebar secara global",
                "value" => 2.51
            ],
        ]
    ];

    public bool $modalState = false;
    public $selectedResult;

    #[On('open-modal')]
    function openModal($id)
    {
        $this->modalState = true;
        $this->selectedResult = $id;
    }

    function deleteData()
    {
        $result = Result::find($this->selectedResult);
        if ($result) {
            $result->delete();
            $this->dispatch("saved");
            $this->modalState = false;
        }
    }

    function calculateTotal()
    {
        $this->total = collect($this->answers)
            ->flatten(1)
            ->filter(function ($answer) {
                return $answer['state'];
            })
            ->sum('value') ?: 0;

        return $this->total;
    }

    function resetStates()
    {
        $collection = collect($this->answers);

        $collection->transform(function ($group) {
            return collect($group)->map(function ($answer) {
                $answer['state'] = false;
                return $answer;
            })->all();
        });

        $this->answers = $collection->all();
        $this->step = 0;
    }

    function nextStep()
    {

        if ($this->step < count($this->questions)) {
            if ($this->step == 0) {
                $this->validate();
            }
            $this->step++;
        } else {
            Result::create([
                "name" => $this->name,
                "position" => $this->position,
                "result" => $this->calculateTotal() ?: 0,
            ]);
            $this->step++;
        }
    }


    function prevStep(): void
    {
        if ($this->step > 0) {
            $this->step--;
        }
    }

    function jumpToStep(int $step): void
    {
        $this->step = $step;
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
