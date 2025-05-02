<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Toko Elektronik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: green;
            margin-top: 50px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: green;
            margin-bottom: 30px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }


        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .hasil-input h3 {
            color: green;
            margin-bottom: 20px;
            text-align: center;
        }

        .hasil-input p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Toko Elektronik</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer </label>
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk </label>
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_2" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input"
                                    value="Mesin Cuci" required="required">
                                <label for="produk_0" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk </label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Tambahkan</button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga :</h4>
                    <ul>
                        <li>TV - Rp. 4.200.000</li>
                        <li>Kulkas - Rp. 3.100.000</li>
                        <li>Mesin Cuci - Rp. 3.800.000</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $TV = 4200000 * $jumlah;
        $Kulkas = 3100000 * $jumlah;
        $Mesin = 3800000 * $jumlah;

        ?>
        <div class="hasil-input">
            <h3>Hasil Inputan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Produk Pilihan</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Total Belanja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $name; ?>
                        </td>
                        <td>
                            <?php echo $produk; ?>
                        </td>
                        <td>
                            <?php echo $jumlah; ?>
                        </td>
                        <td>
                            <?php
                            $total = 0;
                            switch ($produk) {
                                case "TV":
                                    $total = 4200000 * $jumlah;
                                    break;
                                    case "Kulkas":
                                        $total = 3100000 * $jumlah;
                                        break;
                                case "Mesin Cuci":
                                    $total = 3800000* $jumlah;
                                    break;

                            }
                            echo "Rp. " . number_format($total, 0, ',', '.'); // Menampilkan harga dengan format rupiah
                            ?>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>




<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html> 