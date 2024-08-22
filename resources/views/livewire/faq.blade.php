<div class="flex justify-center min-h-screen">
    <div class="max-w-4xl mt-10">
        <span class="text-red-600 text-xl font-bold">
            FREQUENTLY ASKED QUESTION (FAQ)
        </span>

        <div x-data="{ isKetentuan: true }" class="grid grid-cols-5 mt-10 gap-5">
            <div class="flex flex-col gap-2 items-start col-span-1">
                <button x-on:click="isKetentuan=true" :class="isKetentuan ? 'text-zinc-500' : ''"
                    class="text-xs md:text-xl font-bold">
                    Ketentuan File
                </button>
                <button x-on:click="isKetentuan=false" :class="!isKetentuan ? 'text-zinc-500' : ''"
                    class="text-xs md:text-xl font-bold">
                    Pesanan
                </button>
            </div>

            <div x-show="isKetentuan" class="mb-10 col-span-4">
                <p class="font-semibold text-lg">
                    1. Bagaimana Jika Saya Ingin Cetak Dan Tidak Memiliki Desain?
                </p>
                <p class="font-medium">
                    Untuk anda yang ingin cetak tapi belum memiliki file, kami menyediakan jasa design produk
                    (offline
                    dan
                    online). Silahkan konsultasikan ke customer service kami.
                </p>
                <p class="font-semibold text-lg mt-10">
                    2. Apakah Ada Ketentuan File Yang Harus Disiapkan Untuk Di Cetak?
                </p>
                <p class="font-medium">
                    Agar file tidak pecah saat di-print, kami menganjurkan Anda mengirimkan resolusi file di atas
                    300dpi
                    dengan format pdf, TIFF, JPEG, PNG atau link canva. Anda bisa mengecek kualitas cetakan dengan:
                </p>
                <p class="font-medium mt-2">
                    - Untuk File Photoshop atau JPEG buka di Program Photoshop lalu Klik Image > Image Size. Maka
                    akan
                    keluar
                    kotak dialog Image Size. Pastikan resolusinya sudah 300 pixel/inch.
                </p>
                <p class="font-medium mt-2">
                    - Perbesar File JPEG anda dalam Program Photoshop dengan Zoom in hingga 150% jika kualitas tidak
                    pecah
                    berarti tidak masalah.
                </p>
                <p class="font-semibold text-lg mt-10">
                    3. Tipe Media Penyimpanan Apa Saja Yang Dapat Saya Gunakan?
                </p>
                <p class="font-medium">
                    Kami menerima upload file melalui media penyimpanan WeTransfer, Dropbox, dan Google Drive.
                    Selain
                    itu
                    kami juga menerima file melalui email ataupun whatsapp.
                </p>
                <p class="font-semibold text-lg mt-10">
                    4. Bisakah Saya Mengirimkan File Yang Sangat Besar?
                </p>
                <p class="font-medium">
                    Anda bisa mengirimkan file hingga sebesar 2GB (giga byte) melalui WeTransfer, Dropbox, dan
                    Google
                    Drive.
                </p>
                <p class="font-semibold text-lg mt-10">
                    5. Mode Warna Apa Yang Dianjurkan Untuk Diupload?
                </p>
                <p class="font-medium">
                    Kami menerima mode warna CMYK.
                </p>
            </div>

            <div x-show="!isKetentuan" class="mb-10 col-span-4">
                <p class="font-semibold text-lg">
                    1. Berapa Lama Proses Order?
                </p>
                <p class="font-medium">
                    Untuk Proses Order tergantung kesiapan File anda. Jika tidak ada masalah kami akan proses dalam
                    hitungan
                    Jam dan selesai dihari yang sama. Jumlah juga menentukan lamanya proses produksi.
                </p>
                <p class="font-semibold text-lg mt-10">
                    2. Bagaimana Cara Mengetahui Status Pesanan Saya?
                </p>
                <p class="font-medium">
                    Anda bisa mengecek status pesanan melalui website Alfajri Creative Agency. Berikut langkah-
                    langkah
                    yang
                    bisa dilakukan:
                </p>
                <p class="font-medium mt-2">
                    1. Klik pada menu STATUS ORDER
                </p>
                <p class="font-medium">
                    2. Masukan nomor invoice dan nomor telepon
                </p>
                <p class="font-medium">
                    3. Status pesanan akan muncul jika nomor invoice dan nomor telepon sesuai
                </p>
            </div>
        </div>
    </div>
</div>
