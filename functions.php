<?php 

// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "databuku");

// Membuat function query untuk mengambil atau query data dari tabel buku di database
function  query($query) {
	//koneksi sudah dilakukan di function
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

// Membuat function tambah untuk menambah data buku 
function tambah($data) {
	//koneksi sudah dilakukan di function
	global $conn;
	// mengambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$genre = htmlspecialchars($data["genre"]);
	$harga = htmlspecialchars($data["harga"]);

	//query untuk insert atau menambahkan data
	$query = "INSERT INTO buku VALUES ('', '$nama', '$genre', $harga)";
	mysqli_query($conn, $query);
	//mengembalikan angka 1 jika berhasil dan -1 jika gagal
	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function edit($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$genre = htmlspecialchars($data["genre"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "UPDATE buku SET 
			  nama = '$nama',
			  genre = '$genre',
			  harga = $harga
			  WHERE id = $id
			  ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function registrasi($data) {
    global $conn;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    
    // cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = 'username'");
    
    if ( mysqli_fetch_assoc($result)) {
        echo "<scipt>
            alert('user sudah terdaftar');
        </script>";
        return false;
        
    }
    
    //cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<scipt>
            alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    
    return mysqli_affected_rows($conn);
}


?>

