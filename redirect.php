<?php
if (isset($_POST['redirect'])) {
    switch( $_POST['redirect'] ) {

          // --------------------------------------------------------------------| 
         // يعطيه القيمه case العملية الي تصير هنا ايذا شخص اختار شي من داله 
        // ---------------------------------------------------------------------|
        
        case "1": // اذا شخص اختار واحد
            header("Location: https://x3ro.me"); // الرابط 
            break;

        case "2":
            header("Location: https://youtu.be/ZrUYRGvKT2w");
            break;

        case "3":
            header("Location: https://github.com/fzrael/"); 
            break;

            //  case "مثال":
             // header("Location: ضع رابط هنا");
              // break;

        default: // ايذا كان البوست غلط
    echo '<script>alert("هاذا الاختصار غير موجود !")</script>'; 
    header("Refresh:0");
        break;
    }
}

?>