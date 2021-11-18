<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
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
        User::factory(10)->create();

        User::create([
            "nik" => 3501234567890123,
            "name" => "Hasan bin Ali",
            "password" => bcrypt("password"),
            "email" => "hasan@gmail.com",
            "role" => "admin",
            "no_telp" => "08787498473"

        ]);

        Category::create([
            "name" => "Novel"
        ]);
        Category::create([
            "name" => "Komputer"
        ]);
        Category::create([
            "name" => "Sains"
        ]);
        Category::create([
            "name" => "Pengembangan Diri"
        ]);
        Book::create([
            "judul" => "Laskar pelangi",
            "img" => "Laskar Pelangi.jpg",
            "penulis" => "Andrea Hirata",
            "category_id" => 1,
            "thn_terbit" => 2005,
            "jml_halaman" => 500,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Bumi Manusia",
            "penulis" => "Pramoedya Ananta Toer",
            "img" => "Bumi Manusia.jpeg",
            "category_id" => 1,
            "thn_terbit" => 1980,
            "jml_halaman" => 502,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Bumi Bulat",
            "penulis" => "Pramoedya Ananta Toer",
            "img" => "Bumi Manusia.jpeg",
            "category_id" => 2,
            "thn_terbit" => 1980,
            "jml_halaman" => 502,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Ayat-Ayat Cinta",
            "penulis" => "Habiburrahman El Shirazy",
            "img" => "Ayat Ayat Cinta.jpg",
            "category_id" => 1,
            "thn_terbit" => 2003,
            "jml_halaman" => 523,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Negeri 5 Menara",
            "penulis" => "Ahmad Fuadi",
            "img" => "Negeri 5 Menara.jpg",
            "category_id" => 1,
            "thn_terbit" => 2009,
            "jml_halaman" => 400,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "5 cm",
            "penulis" => "Donny Dhirgantoro",
            "img" => "5 cm.jpg",
            "category_id" => 1,
            "thn_terbit" => 2005,
            "jml_halaman" => 537,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Cantik Itu Luka",
            "penulis" => "Eka Kurniawan",
            "img" => "Cantik itu Luka.jpg",
            "category_id" => 1,
            "thn_terbit" => 2002,
            "jml_halaman" => 537,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Dasar Logika Informatika",
            "penulis" => "Maxrizal",
            "img" => "Dasar Logika Informatika.jpg",
            "category_id" => 2,
            "thn_terbit" => 2015,
            "jml_halaman" => 70,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Sistem Operasi",
            "penulis" => "Onno W Purbo",
            "img" => "Sistem Operasi.jpg",
            "category_id" => 2,
            "thn_terbit" => 2019,
            "jml_halaman" => 123,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Buku Ajar Matematika Teknik 1",
            "penulis" => "Sigit Kusmaryanto",
            "img" => "Buku Ajar.jpg",
            "category_id" => 3,
            "thn_terbit" => 2013,
            "jml_halaman" => 126,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
    }
}
