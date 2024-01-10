<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Midori Harahap</title>
    </head>
    <body>
        <?php
        //inisialisasi variabel untuk menyimpan nilai form
        $firstname = $lastname = $gender = $nationality = $language = $bio = "";

        //jika form dikirimkan maka proses data
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //ambil data dari formulir
            $firstname = ($_POST["firstname"]);
            $lastname = ($_POST["lastname"]);
            $gender = ($_POST["gender"]);
            $nationality = ($_POST["nationality"]);
            //mengambil nilai dari elemen checkboc language
            if (isset($_POST["language"])){
                $language = implode(", ", $_POST["language"]);
            }
            $bio = ($_POST["bio"]);

            //tampilkan pesan sambutan
            echo "<h3>Hai Welcome, $firstname!</h3>";
            echo "<ul>";
            echo "<li>Name: $firstname $lastname</li>";
            echo "<li>Gender: $gender</li>";
            echo "<li>Nationality: $nationality</li>";
            echo "<li>Language: $language</li>";
            echo "<li>Bio: $bio</li>";
            echo "</ul>";
            echo "<p>Thank you for filling out the form, follow our Instagram for more info</p>";
        }

        ?>
    </body>
</html>