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
            "name" => "Sains & Teknologi"
        ]);
        Category::create([
            "name" => "Teknik"
        ]);
        Category::create([
            "name" => "Kesehatan"
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
            "judul" => "Pengantar Jaringan Komputer Pendekatan Praktis Untuk Pemula",
            "penulis" => "Agung Suprapto",
            "img" => "pengantar-Jaringan-Komputer_Agung-Suprapto-rev-2.0-convert-cover-depan-scaled.jpg",
            "category_id" => 2,
            "thn_terbit" => 1980,
            "jml_halaman" => 502,
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
        Book::create([
            "judul" => "Mengenal Polimer Dan Polimerisasi",
            "penulis" => "Rochmadi Ajar Permono",
            "img" => "polimer-dan-polimerasi.jpg",
            "category_id" => 3,
            "thn_terbit" => 2018,
            "jml_halaman" => 219,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Mekatronika",
            "penulis" => "Gesang Nugroho",
            "img" => "mekatronika_depan1.jpg",
            "category_id" => 3,
            "thn_terbit" => 2021,
            "jml_halaman" => 146,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Geologi Mineral Logam",
            "penulis" => "Sukandarrumidi",
            "img" => "Geologi-Mineral-Logam.png",
            "category_id" => 3,
            "thn_terbit" => 2016,
            "jml_halaman" => 210,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Pola Pikir Sistem",
            "penulis" => "Agus Maryono",
            "img" => "pola-pikir-sistem_depan.jpg",
            "category_id" => 3,
            "thn_terbit" => 2019,
            "jml_halaman" => 145,
            "sinopsis" => "U.S. Marine grabs an infant over a fence of barbed wire during an evacuation at Hamid Karzai International Airport in Kabul on Aug. 19. (Courtesy of Omar Haidiri / AFP/Getty Images)
            As the Taliban stood poised to take control of Afghanistan's capital city, Los Angeles attorney Wogai Mohmand watched, horrified, racking her brain for how to help her family and others escape.
            
            She typed up a document outlining possible immigration pathways for Afghans seeking to come to the United States and posted it on social media. Hundreds of strangers replied, begging her for legal help."
        ]);
        Book::create([
            "judul" => "Kesehatan Lingkungan",
            "penulis" => "Juli Soemirat",
            "img" => "kesehatan-lingkungan.png",
            "category_id" => 4,
            "thn_terbit" => 2018,
            "jml_halaman" => 268,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Manajemen Program Kesehatan",
            "penulis" => "Yodi Mahendradhata",
            "img" => "Manajemen-Program-Kesehatan.jpg",
            "category_id" => 4,
            "thn_terbit" => 2019,
            "jml_halaman" => 160,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Imunologi Gizi",
            "penulis" => "Harry Freitag Luglio Muhammad",
            "img" => "imunologi.jpg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 127,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Epidemiologi Untuk Kesehatan Masyarakat",
            "penulis" => "Riris Andono Ahmad",
            "img" => "Buku-Teks-Epidemiologi-untuk-Kesehatan-Masyarakat.png",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 212,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Pedoman Penatalaksanaan Gizi Atlet",
            "penulis" => "Mirza Hapsari Sakti Titis Penggalih",
            "img" => "Pedoman-Penatalaksanaan-Gizi-Atlet.png",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 232,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Toksikologi Lingkungan",
            "penulis" => "Avicena S.M.",
            "img" => "Toksikologi-Lingkungan.jpg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 382,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Perencanaan Dan Evaluasi Kesehatan",
            "penulis" => "Putri Permatasari",
            "img" => "Perencanaan-dan-Evaluasi-Kesehatan.jpg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 382,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Manajemen Lab. Administrasi Multimedia Dan Edukasi Kesehatan",
            "penulis" => "Puguh Yudho Trisnanto",
            "img" => "Manajemen-Lab.Administrasi.jpg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 201,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "The Shortcut: Perawatan Dasar Kulit",
            "penulis" => "Rizki Hapsari Nugraha",
            "img" => "perawatan dasar kulit.jpg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 88,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
        Book::create([
            "judul" => "Kajian Filsafat Dalam Kedokteran Gigi",
            "penulis" => "Rizki Amalina",
            "img" => "kajian-filsafat.jpeg",
            "category_id" => 4,
            "thn_terbit" => 2021,
            "jml_halaman" => 124,
            "sinopsis" => "Health Care Renovation
            News coverage of health care in the Democrats’ big social spending bill has focused on policies that got cut: things like broad limits on prescription drug prices and dental benefits for those on Medicare. But the bill, as it stands, still includes a lot of changes that would expand health coverage, broaden benefits and lower costs across the age spectrum.
            
            The changes aren’t a major reconsideration of the health care system in the U.S., as Medicare for all would be. Instead, Democrats in Congress have crafted smaller solutions to gaps in the current system.
            
            “They’re all sort of small slices,” said Christine Eibner, a senior economist at the RAND Corporation. “We have a whole bunch of little niches that need to be filled.”
            
            Because the bill is still being negotiated by Congress, details could change — or the legislation might fail altogether. But the current package represents a particular vision for how to overhaul the system."
        ]);
    }
}
