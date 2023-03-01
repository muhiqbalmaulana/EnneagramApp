$(function() {


    pertama = [0, 0, 0]
    kedua = [0, 0, 0]


    $(".jawab-a").click(function() {
        pertama[0]++
    })

    $(".jawab-b").click(function() {
        pertama[1]++
    })


    $(".jawab-c").click(function() {
        pertama[2]++
    })

    $(".jawab-d").click(function() {
        kedua[0]++
    })

    $(".jawab-e").click(function() {
        kedua[1]++
    })

    $(".jawab-f").click(function() {
        kedua[2]++
    })


    sembunyi = function() {
        $(".soal").hide()
    }




    sembunyi()
    $(".prolog").show()

    $(".jawab-prolog").click(function() {
        sembunyi()
        $(".identitas").show()
    })

    $(".jawab-chart").click(function() {
        sembunyi()
        $(".chart").show()
    })


    $(".jawab-backhome").click(function() {
        sembunyi()
        $(".prolog").show()
    })

    $(".jawab-identitas").click(function() {
        sembunyi()
        $(".soal-a1").show()
    })

    $(".soal-a1 .jawab").click(function() {
        sembunyi()
        $(".soal-a2").show()
    })

    $(".soal-a2 .jawab").click(function() {
        sembunyi()
        $(".soal-a3").show()
    })

    $(".soal-a3 .jawab").click(function() {
        sembunyi()
        $(".soal-a4").show()
    })

    $(".soal-a4 .jawab").click(function() {
        sembunyi()
        $(".soal-a5").show()
    })

    $(".soal-a5 .jawab").click(function() {
        sembunyi()
        $(".soal-a6").show()
    })

    $(".soal-a6 .jawab").click(function() {
        sembunyi()
        $(".soal-a7").show()
    })

    $(".soal-a7 .jawab").click(function() {
        sembunyi()
        $(".soal-b1").show()
    })

    $(".soal-b1 .jawab").click(function() {
        sembunyi()
        $(".soal-b2").show()
    })

    $(".soal-b2 .jawab").click(function() {
        sembunyi()
        $(".soal-b3").show()
    })

    $(".soal-b3 .jawab").click(function() {
        sembunyi()
        $(".soal-b4").show()
    })

    $(".soal-b4 .jawab").click(function() {
        sembunyi()
        $(".soal-b5").show()
    })

    $(".soal-b5 .jawab").click(function() {
        sembunyi()
        $(".soal-b6").show()
    })

    $(".soal-b6 .jawab").click(function() {
        sembunyi()
        $(".soal-b7").show()
    })

    $(".soal-b7 .jawab").click(function() {
        sembunyi();


        largest_pertama = Math.max.apply(Math, pertama)
        posisi_pertama = pertama.indexOf(largest_pertama)

        largest_kedua = Math.max.apply(Math, kedua)
        posisi_kedua = kedua.indexOf(largest_kedua)

        if (posisi_pertama == 0 && posisi_kedua == 0) {
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'8'},
                success: function(results) {
                    $(".hasil-8").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 1 && posisi_kedua == 0) {
            //$(".hasil-3").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'3'},
                success: function(results) {
                    $(".hasil-3").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 2 && posisi_kedua == 0) {
            //$(".hasil-7").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'7'},
                success: function(results) {
                    $(".hasil-7").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 0 && posisi_kedua == 1) {
            //$(".hasil-2").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'2'},
                success: function(results) {
                    $(".hasil-2").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 1 && posisi_kedua == 1) {
            //$(".hasil-6").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'6'},
                success: function(results) {
                    $(".hasil-6").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 2 && posisi_kedua == 1) {
            //$(".hasil-1").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'1'},
                success: function(results) {
                    $(".hasil-1").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 0 && posisi_kedua == 2) {
            //$(".hasil-5").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'5'},
                success: function(results) {
                    $(".hasil-5").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 1 && posisi_kedua == 2) {
            //$(".hasil-9").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'9'},
                success: function(results) {
                    $(".hasil-9").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        } else if (posisi_pertama == 2 && posisi_kedua == 2) {
            //$(".hasil-4").show(function(){
            $.ajax({
                type: "POST",
                url: "php/input_data.php",
                data: {kelas:$("#kelas").val(),nama:$("#nama").val(),absen:$("#absen").val(),hasil:'4'},
                success: function(results) {
                    $(".hasil-4").show();
                    //alert(results);
                },
                error: function() {
                    alert("Error");
                },
            });
            
        }

    })



})
