USE cv_robi;
CREATE TABLE data_cv (
id INT PRIMARY KEY AUTO_INCREMENT,
nama VARCHAR (100) NOT NULL,
alamat TEXT NOT NULL,
telepon VARCHAR (20) NOT NULL,
email VARCHAR (255) NOT NULL,
web VARCHAR (255) NOT NULL,
pendidikan TEXT NOT NULL,
keterampilan TEXT NOT NULL,
foto_path VARCHAR (255) NOT NULL
);

INSERT INTO data_cv (nama, alamat, telepon, email, web, pendidikan, keterampilan, foto_path)
VALUES ('Robi Ferliansyah', 'Griya Serpong Asri', '089691531846', '3337220048@untirta.ac.id','https://github.com/YetiNotFound', 'SMA', 'makan', 'C:\Users\User\OneDrive\Documents\VsCode\cv\cv\profil.jpg');