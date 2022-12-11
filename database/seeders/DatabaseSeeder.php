<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Dimas Bagus',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '08123123123',
            'address' => 'Nginden'
        ]);
        User::create([
            'name' => 'Shalsabila',
            'email' => 'bila@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '0812341234',
            'address' => 'Pogot'
        ]);

        User::factory(10)->create();

        // Product::factory(10)->create();

        Product::create([
            'product_name' => 'Laptop VivoBook 15 2021',
            'price' => '10000000',
            'stock' => '5',
            'description' => 'Laptop ASUS VivoBook 15 2021 adalah ultrabook dengan bobot 1.9kg, tipe penyimpanan SSD dan layar 15" beresolusi 1920 x 1080pixels. Tertarik beli? Dapatkan penawaran harga ASUS VivoBook 15 2021 yang termurah mulai dari IDR5749000 melalui iPrice.',
            'images' => 'https://m.media-amazon.com/images/I/716bvqzz7PL._SX679_.jpg'
        ]);
        Product::create([
            'product_name' => 'HP Notebook 14s-dk0073au',
            'price' => '6620000',
            'stock' => '5',
            'description' => 'Ukuran layar: 14 inch diagonal HD SVA BrightView micro-edge WLED-backlit (1366 x 768 pixels)
            Prosesor: AMD A4-9125 Dual-Core (2.3 GHz base frequency, up to 2.6 GHz burst frequency, 1 MB cache)
            Chipset: AMD Integrated SoC
            Memori penyimpanan: 4 GB DDR4-1',
            'images' => 'https://media.pricebook.co.id/images/product/L/87932_L_1.jpg'
        ]);
        Product::create([
            'product_name' => ' HP Pavilion x360 Intel Core i5 Natural Silver',
            'price' => '12000000',
            'stock' => '5',
            'description' => 'HP Pavilion x360 adalah laptop 2-in-1 dengan bobot 1.4kg. Hadir dengan layar 11" dan resolusi 1366 x 768pixels, laptop ini dilengkapi tipe penyimpanan SSD berkapasitas 512GB dan RAM 8GB. Tertarik memiliki? Langsung saja beli dan dapatkan penawaran harga H',
            'images' => 'https://p-id.ipricegroup.com/uploaded_758a6dd95b16d0f3f3042a652c252de9.jpg'
        ]);
        Product::create([
            'product_name' => 'HP Victus 16',
            'price' => '15000000',
            'stock' => '3',
            'description' => 'HP Victus 16 merupakan laptop gaming dengan ukuran layar 16.1" dan resolusi 1920 x 1080pixels. Laptop HP ini juga didukung dengan daya tahan baterai 7h. Tertarik beli? Dapatkan harga HP Victus 16 yang termurah yakni IDR15499000 via iPrice.',
            'images' => 'https://www.omen.com/content/dam/sites/omen/worldwide/laptops/2022-omen-victus-intel-2-0/21-c-1-victus-calhoun-16-80-w-lcd-mica-silver-nt-h-dcam-non-odd-win-10-core-set-front-right-copy.png'
        ]);
        Product::create([
            'product_name' => 'Lenovo IdeaPad Slim 3 ',
            'price' => '6000000',
            'stock' => '5',
            'description' => 'Mau beli laptop? Lenovo IdeaPad Slim 3 Laptop bisa jadi pilihannya. Laptop dengan berat 1.41kg ini memiliki layar 14" dan resolusi 1920 x 1080pixels. Spesifikasinya juga dilengkapi dengan tipe penyimpanan HDD SATA yang tergolong mumpuni untuk kebutuhan.',
            'images' => 'https://www.lenovo.com/medias/lenovo-laptop-ideapad-3-14-intel-subseries-hero.png?context=bWFzdGVyfHJvb3R8MjY5MjEzfGltYWdlL3BuZ3xoODYvaDUzLzE0MTg2OTE5NTkxOTY2LnBuZ3w2ODgwOTdhZDhlODAwNTYzZmVlNDcwNzE5MGI3MzEzMWNiMTIxYmY5NWE3MzcxZDA1NzM2MzkwNWRlYzQ0MDU3'
        ]);
        Product::create([
            'product_name' => 'Lenovo IdeaPad Flex 5',
            'price' => '6000000',
            'stock' => '5',
            'description' => 'Lenovo IdeaPad Flex 5 adalah laptop 2-in-1 dengan bobot 1.6kg. Hadir dengan layar 14" dan resolusi 1920 x 1080pixels, laptop ini dilengkapi tipe penyimpanan SSD dan sejumlah spesifikasi mumpuni lainnya. Tertarik memiliki? Langsung saja beli dan dapatkan p',
            'images' => 'https://www.lenovo.com/medias/lenovo-laptops-ideapad-flex-5-gen-7-14-amd-gallery-2.png?context=bWFzdGVyfHJvb3R8Njk3Mzg3fGltYWdlL3BuZ3xoZGQvaDMzLzEzNjUyODk2NDgxMzEwLnBuZ3wzMWNjNmZkODE2ODEwNGY1MzQwMzM1MjY2OTFiNTM1MTU1ZTgzMmRjMzMxMTFkYTA0ZmE4NGQxY2Q0NTliNzkx'
        ]);
        Product::create([
            'product_name' => 'Lenovo Legion 7',
            'price' => '18000000',
            'stock' => '5',
            'description' => 'Spesifikasi
            Lenovo Legion 7 merupakan laptop gaming dengan ukuran layar 16" dan resolusi 2560 x 1600pixels. Laptop Lenovo ini juga didukung dengan daya tahan baterai 8h. Tertarik beli? Dapatkan harga Lenovo Legion 7 yang termurah yakni IDR19249000 via iP',
            'images' => 'https://www.lenovo.com/medias/lenovo-gaming-legion-7-gen-7-16-amd-hero.png?context=bWFzdGVyfHJvb3R8MzIwMzcwfGltYWdlL3BuZ3xoMjUvaDk2LzE0MzI4NzMyODQ0MDYyLnBuZ3w3ZTk2YmIyZGM1NjgyZTJiZjk2NTg1MTIwZmFjYzc4NmMwZjAyYThiZDI2ZWFiNGZlZjZmM2YyNmUxZDM0N2Zk'
        ]);
        Product::create([
            'product_name' => 'Epson L310',
            'price' => '1000000',
            'stock' => '5',
            'description' => 'Epson L310 adalah printer inkjet yang mampu hasilkan cetakan berkualitas tinggi dengan resolusi mencapai 5760 x 1440dpi. Untuk mendukung performanya, printer yang memiliki 4 katrid ini sudah dilengkapi dengan kemampuan cetak hingga 9.2ppm untuk monokrom d',
            'images' => 'https://media.pricebook.co.id/images/product/L/42899_L_1.jpg'
        ]);
        Product::create([
            'product_name' => 'Canon PIXMA MP287',
            'price' => '800000',
            'stock' => '5',
            'description' => 'CanonPIXMAMP287 adalah Multifungsi Printer yang mampu mencetak hingga 8.4ppm untuk warna hitam dan 4.8ppm untuk dokumen berwarna. Hadir dengan 4 katrid dan resolusi mencapai 4800 x 1200dpi untuk kualitas cetak yang lebih tajam, printer ini jadi pilihan te',
            'images' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/canon_canon-pixma-mp287-printer_full02.jpg'
        ]);
        Product::create([
            'product_name' => 'Epson L360 All-in-One Ink Tank Printer',
            'price' => '3000000',
            'stock' => '5',
            'description' => 'Epson L360 All-in-One Ink Tank Printer adalah printer yang dapat mencetak hingga 33ppm untuk dokumen hitam & putih dan 15ppm berwarna. Resolusi mencetaknya mencapai 5760 x 1440dpi dan dilengkapi scanner dengan sensor Flatbed yang dapat memindai dengan cep',
            'images' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/epson_epson-l360-hitam-printer--print-scan-copy-_full03.jpg'
        ]);
        Product::create([
            'product_name' => 'Canon EOS 600D',
            'price' => '5000000',
            'stock' => '5',
            'description' => 'Canon EOS 600D. Kamera ini pun memiliki tipe sensor CMOS dengan ukuran 22.3 x 14.9mm serta layar dengan ukuran 3". Video pada kamera ini beresolusi Full HD dengan minimum ISO 100 dan maksimal ISO 12800.',
            'images' => 'https://lemoot.com/engine/wp-content/uploads/2016/12/Harga-Kamera-Canon-600D-Dan-Spesifikasi-kamera-Canon-600D.jpg'
        ]);
        Product::create([
            'product_name' => 'Fujifilm Instax Mini 8',
            'price' => '5000000',
            'stock' => '5',
            'description' => 'Fujifilm Instax Mini 8 akan memberikan kesan hipster masa kini bila Anda gunakan. Instax camera dari Fuji ini juga menandakan bahwa kamera polaroid masih panjang umur.',
            'images' => 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/03/Blog_Review-Fujifilm-Instax-Mini-8-Kamera-Instan-yang-Ergonomis-dan-Colorful.jpg'
        ]);
        Product::create([
            'product_name' => 'Sony Alpha A6000',
            'price' => '10000000',
            'stock' => '5',
            'description' => 'Sony Alpha A6000 merupakan kamera mirrorless Sony dengan ketajaman video Full HD. Didukung dengan ISO sebesar 100-25600, mirrorless Sony Alpha A6000 ini dilengkapi pula dengan viewfinder Electronic dan sensor CMOS APS-C. Rilis tahun: 2014.',
            'images' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2019/6/22/347072/347072_5710e9ca-4a57-47df-85d9-627039c6a77e_700_700.jpg'
        ]);
        Product::create([
            'product_name' => 'Fujifilm X-T100',
            'price' => '8000000',
            'stock' => '5',
            'description' => 'Fujifilm X-T100 merupakan kamera mirrorless Fujifilm dengan ketajaman video Full HD. Didukung dengan ISO sebesar 200-12800, mirrorless Fujifilm X-T100 ini dilengkapi pula dengan viewfinder Electronic dan sensor CMOS APS-C. Rilis tahun: 2019.',
            'images' => 'https://www.yangcanggih.com/wp-content/uploads/2018/05/Fujfilm-X-T100-2.jpg'
        ]);
        Product::create([
            'product_name' => 'vivo V25 Pro',
            'price' => '12000000',
            'stock' => '5',
            'description' => 'vivo V25 Pro merupakan HP dengan layar 6.56" dan tingkat densitas piksel sebesar 398ppi. Ia dilengkapi dengan kamera belakang 64 + 12 + 2MP dan kamera depan 32MP. HP ini juga hadir dengan kapasitas baterai 4830mAh. vivo V25 Pro dirilis pada: 2022.',
            'images' => 'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/09/12/2761376067.jpg'
        ]);
        Product::create([
            'product_name' => 'Apple iPhone X ',
            'price' => '8000000',
            'stock' => '5',
            'description' => 'Apple iPhone X merupakan HP dengan layar 5.8" dan tingkat densitas piksel sebesar 458ppi. Ia dilengkapi dengan kamera belakang 12MP dan kamera depan 12MP. HP ini juga hadir dengan kapasitas baterai 2716mAh. Apple iPhone X dirilis pada: 2017.',
            'images' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2019/4/30/3420722/3420722_8ef6fe65-222d-4e37-8100-dc5a3f268945_800_800.jpg'

        ]);
        Product::create([
            'product_name' => 'OPPO Reno8 ',
            'price' => '7000000',
            'stock' => '5',
            'description' => 'OPPO Reno8 merupakan HP dengan layar 6.4" dan tingkat densitas piksel sebesar 409ppi. Ia dilengkapi dengan kamera belakang 50 + 2 + 2MP dan kamera depan 32MP. HP ini juga hadir dengan kapasitas baterai 4500mAh. OPPO Reno8 dirilis pada: 2022.',
            'images' => 'https://carisinyal.com/wp-content/uploads/2022/07/OPPO-Reno8-Pro-Black_.webp'
        ]);
        Product::create([
            'product_name' => 'Samsung Galaxy A13',
            'price' => '6000000',
            'stock' => '5',
            'description' => 'Samsung Galaxy A13 merupakan HP dengan layar 6.6" dan tingkat densitas piksel sebesar 400ppi. Ia dilengkapi dengan kamera belakang 50 + 5 + 2 + 2MP dan kamera depan 8MP. HP ini juga hadir dengan kapasitas baterai 5000mAh. Samsung Galaxy A13 dirilis pada: ',
            'images' => 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a135fzkjxid/gallery/id-galaxy-a13-sm-a135-sm-a135fzkjxid-531621482?$650_519_PNG$'
        ]);
        Product::create([
            'product_name' => 'realme C35',
            'price' => '5000000',
            'stock' => '5',
            'description' => 'realme C35 merupakan HP dengan layar 6.6" dan tingkat densitas piksel sebesar 401ppi. Ia dilengkapi dengan kamera belakang 50MP dan kamera depan 8MP. HP ini juga hadir dengan kapasitas baterai 5000mAh. realme C35 dirilis pada: 2022.',
            'images' => 'https://image05.realme.net/general/20220329/1648546991735.png.webp'
        ]);
        Product::create([
            'product_name' => 'vivo V23 5G',
            'price' => '7000000',
            'stock' => '5',
            'description' => 'vivo V23 5G merupakan HP dengan layar 6.44" dan tingkat densitas piksel sebesar 409ppi. Ia dilengkapi dengan kamera belakang 64 + 8 MP dan kamera depan 50 + 8MP. HP ini juga hadir dengan kapasitas baterai 4200mAh. vivo V23 5G dirilis pada: 2022.',
            'images' => 'https://cdn.eraspace.com/media/catalog/product/v/i/vivo_v23_5g_stardust_black_1.jpg'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
