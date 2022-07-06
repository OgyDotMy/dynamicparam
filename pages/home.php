<?php 

// state ;

/* comment multiple line */

// output PHP -> echo

// combination html dengan php
// echo "<h1>first test</h1>";
// echo "<br>";
// echo "<a href='https://google.com'>link ke google</a>";
// echo "<br>";
// print "hello world";
// echo "<br>";

// echo 1 + 1;
// echo "<br>";
// echo 5 * 5;

// combination concatnation

// echo "hasil penambahan".5." ditambah dengan ".10." adalah ". 5 + 10;

// variable 
// diawalkan dengan tanda dollar $
// wajib follow dengan huruf atau tanda _ -> $namavariable atau $_namavariable

// $namavariable;
// $_namavariable;

// $header="<h1>Header</h1>";
// echo $header;

// $nombor1=5;
// $nombor2=10;
// $total=$nombor1 + $nombor2;

// echo "hasil penambahan" .$nombor1." ditambah dengan " .$nombor2." adalah ".$total;

// function -> sesuatu yang ingin dilakukan secara berulang-ulang kali

// function namafunction(){
//     //command anda ;
// }

// function heading(){
//     echo "<h1>heading</h1>";
// }

// heading();

// function makeheading($content){
//     echo "<h1>$content</h1>";
// }
// function makelink($href,$content){
//     echo "<a href='$href'>$content</a>";
// }

// makeheading("google test 123");
// makelink("https://google.com","link ke google");
// makeheading("yahoo test 456");
// makelink("https://yahoo.com","link ke yahoo");




?>

<?php include"parts/header.php"; ?>

    <!-- content -->
    <div class="content">
            <div class="container">
                <div class="posting">
                    <?php makeheading("5","cara home bekerja")?>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ducimus cumque recusandae esse suscipit temporibus vitae animi non tenetur fugiat. Laboriosam, modi quo nisi alias doloremque expedita molestias placeat vel eos nihil animi saepe? Excepturi provident suscipit autem ipsum harum ut? Dolorem nobis optio quaerat ea. Suscipit obcaecati consequatur hic consequuntur, exercitationem modi doloribus ad molestias deleniti mollitia dolorum inventore placeat facilis aut neque perspiciatis eius! Assumenda aliquam similique atque, expedita nemo commodi et ratione libero, inventore, doloremque dignissimos ullam minus amet veritatis dolor quidem quos necessitatibus quo consequuntur. Illum sit deleniti id ipsum cumque exercitationem amet laborum ipsam earum!</p>
                </div>
            </div>
        </div>
        <!-- end content -->

<?php include"parts/footer.php"; ?>
