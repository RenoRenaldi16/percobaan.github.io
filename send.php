<?php 

if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $ruangan = $_POST['ruangan'];
    $kerusakan = $_POST['kerusakan'];
    $noWa = $_POST['noWa'];
    $noWa1 = $_POST['noWa1'];
    $noWa2 = $_POST['noWa2'];

    header("location:https://api.whatsapp.com/send?phone=$noWa1&$noWa2&text=Assalamualaikum%20Tim%20IT,%20Saya%20$nama%20Boleh%20minta%20tolong%20untuk%20ke%20ruang%20$ruangan%20ada%20$kerusakan%20Terima%20Kasih. ");
    
}else{
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}

?>