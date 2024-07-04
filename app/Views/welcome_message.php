<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hendro CPL - CI 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>

                <li class="menu-toggle">
                    <button id="menuToggle">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="https://sites.google.com/view/endroportfolio/beranda">My Profolio</a></li>
                <li class="menu-item hidden"><a href="https://www.facebook.com/rihack target=" _blank">Facebook</a>
                </li>
                <li class="menu-item hidden"><a href="https://www.instagram.com/endrocpl/" target=" _blank">Instagram</a></li>
                </li>
            </ul>
        </div>

        <div class="heroe">

            <h1>SUMMARY</h1>
            <table class="table table-bordered border-dark table-hover">
                <tr>
                    <th class="text-center">Date</th>
                    <th class="text-center">Style</th>
                    <th class="text-center">Total Size</th>
                    <th class="text-center">Total Output</th>
                    <th class="text-center">Action</th>
                </tr>
                <tbody>
                    <?php foreach ($data->getResult() as $d) { ?>
                        <tr>
                            <td><?= $d->TrnDate ?></td>
                            <td><?= $d->StyleCode ?></td>
                            <td align="center"><?= $d->totalSize ?></td>
                            <td align="center"><?= $d->totalOutput ?></td>
                            <td align="center">
                                <button type="button" class="btn btn-primary" onclick="showDetail('<?= $d->TrnDate ?>','<?= $d->StyleCode ?>')">View Detail</button>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>

            </table>


        </div>


        <div class="heroe" id="detail">
            <h2>
                <div id="judul"></div>
            </h2>

            <h6>Detail Transaction</h6>
            <div id="tableAbjad">
                <table class="table table-bordered border-dark" id="list2">
                    <tr>
                        <th rowspan="2">Operator</th>
                        <th class="text-center" colspan="6">Size</th>
                        <th rowspan="2" class="text-center">Total Qty</th>
                        <th rowspan="2" class="text-center">Destination</th>
                    </tr>
                    <tr>
                        <th class="text-center">XS</th>
                        <th class="text-center">S</th>
                        <th class="text-center">M</th>
                        <th class="text-center">L</th>
                        <th class="text-center">XL</th>
                        <th class="text-center">XXL</th>
                    </tr>
                    <tr>
                        <td colspan="9" align="center">No selected data</td>
                    </tr>

                </table>
            </div>

            <div id="tableAngka">
                <table class="table table-bordered border-dark" id="list1">
                    <tr>
                        <th rowspan="2">Operator</th>
                        <th class="text-center" colspan="11">Size</th>
                        <th rowspan="2" class="text-center">Total Qty</th>
                        <th rowspan="2" class="text-center">Destination</th>
                    </tr>
                    <tr>
                        <th class="text-center">92</th>
                        <th class="text-center">98</th>
                        <th class="text-center">104</th>
                        <th class="text-center">110</th>
                        <th class="text-center">116</th>
                        <th class="text-center">122</th>
                        <th class="text-center">128</th>
                        <th class="text-center">134</th>
                        <th class="text-center">140</th>
                        <th class="text-center">146</th>
                        <th class="text-center">152</th>
                    </tr>
                    <tr>
                        <td colspan="15" align="center">No selected data</td>
                    </tr>

                </table>
            </div>

        </div>
    </header>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</html>


<script>
    $("#tableAbjad").hide();
    $("#tableAngka").hide();

    function showDetail(datex, StyleCode) {
        var judul = StyleCode + ' #' + datex;

        $('#judul').text('Loading');
        $.ajax({
            url: "<?php echo base_url(); ?>home/detail",
            // headers: {
            //     "Content-Type": "application/json",
            //     "X-Requested-With": "XMLHttpRequest"
            // },
            type: 'POST',
            data: {
                trndate: datex,
                scode: StyleCode
            },
            dataType: 'JSON',
            async: true,
            success: function(data) {

                console.log(data.tipe);
                $('#judul').text(judul);
                if (data.tipe == "abjad") {
                    //#############################################
                    $("#tableAbjad").show();
                    $("#tableAngka").hide();

                    $("#list2 tr").remove();
                    $("#list2").find('tbody').append(`<tr>
                    <th rowspan="2">Operator</th>
                    <th class="text-center" colspan="6">Size</th>
                    <th rowspan="2" class="text-center">Total Qty</th>
                    <th rowspan="2" class="text-center">Destination</th>
                </tr>
                <tr>
                    <th class="text-center">XS</th>
                    <th class="text-center">S</th>
                    <th class="text-center">M</th>
                    <th class="text-center">L</th>
                    <th class="text-center">XL</th>
                    <th class="text-center">XXL</th>
                </tr>`);

                    var length = data.dt.length;
                    for (var i in data.dt) {
                        var rows = "";
                        var nama = data.dt[i].operatorName;
                        var xs = (data.dt[i].XS == 0 ? '<font color=\"red\">0</font>' : data.dt[i].XS);
                        var s = (data.dt[i].S == 0 ? '<font color=\"red\">0</font>' : data.dt[i].S);
                        var m = (data.dt[i].M == 0 ? '<font color=\"red\">0</font>' : data.dt[i].M);
                        var l = (data.dt[i].L == 0 ? '<font color=\"red\">0</font>' : data.dt[i].L);
                        var xl = (data.dt[i].XL == 0 ? '<font color=\"red\">0</font>' : data.dt[i].XL);
                        var xxl = (data.dt[i].XXL == 0 ? '<font color=\"red\">0</font>' : data.dt[i].XXL);
                        var qty = (data.dt[i].qty == 0 ? '<font color=\"red\">0</font>' : data.dt[i].qty);
                        var dest = data.dt[i].Destination;
                        rows += "<tr><td>" + nama + "</td><td  align=\"center\">" + xs + "</td><td align=\"center\">" + s + "</td><td  align=\"center\">" + m + "</td><td  align=\"center\">" + l + "</td><td  align=\"center\">" + xl + "</td><td  align=\"center\">" + xxl + "</td><td  align=\"center\">" + qty + "</td><td>" + dest + "</td></tr>";
                        $(rows).appendTo("#list2 tbody");
                    }
                    //#############################################
                } else {
                    $("#tableAbjad").hide();
                    $("#tableAngka").show();
                    $("#list1 tr").remove();
                    $("#list1").find('tbody').append(` <tr>
                        <th rowspan="2">Operator</th>
                        <th class="text-center" colspan="11">Size</th>
                        <th rowspan="2" class="text-center">Total Qty</th>
                        <th rowspan="2" class="text-center">Destination</th>
                    </tr>
                    <tr>
                        <th class="text-center">92</th>
                        <th class="text-center">98</th>
                        <th class="text-center">104</th>
                        <th class="text-center">110</th>
                        <th class="text-center">116</th>
                        <th class="text-center">122</th>
                        <th class="text-center">128</th>
                        <th class="text-center">134</th>
                        <th class="text-center">140</th>
                        <th class="text-center">146</th>
                        <th class="text-center">152</th>
                    </tr>`);

                    var length = data.dt.length;
                    for (var i in data.dt) {
                        var rows = "";
                        var nama = data.dt[i].operatorName;
                        var n92 = (data.dt[i].n92 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n92);
                        var n98 = (data.dt[i].n98 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n98);
                        var n104 = (data.dt[i].n104 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n104);
                        var n110 = (data.dt[i].n110 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n110);
                        var n116 = (data.dt[i].n116 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n116);
                        var n122 = (data.dt[i].n122 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n122);
                        var n128 = (data.dt[i].n128 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n128);
                        var n134 = (data.dt[i].n134 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n134);
                        var n140 = (data.dt[i].n140 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n140);
                        var n146 = (data.dt[i].n146 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n146);
                        var n152 = (data.dt[i].n152 == 0 ? '<font color=\"red\">0</font>' : data.dt[i].n152);
                        var qty = (data.dt[i].qty == 0 ? '<font color=\"red\">0</font>' : data.dt[i].qty);
                        var dest = data.dt[i].Destination;
                        rows += "<tr><td>" + nama + "</td><td  align=\"center\">" + n92 + "</td><td align=\"center\">" + n98 + "</td><td  align=\"center\">" + n104 + "</td><td  align=\"center\">" + n110 + "</td><td  align=\"center\">" + n116 + "</td><td  align=\"center\">" + n122 + "</td><td  align=\"center\">" + n128 + "</td><td  align=\"center\">" + n134 + "</td><td  align=\"center\">" + n140 + "</td><td  align=\"center\">" + n146 + "</td><td  align=\"center\">" + n152 + "</td><td  align=\"center\">" + qty + "</td><td>" + dest + "</td></tr>";
                        $(rows).appendTo("#list1 tbody");
                    }
                    //#############################################
                }
            },
            error: function(jqXHR, exception) {
                $('#judul').text('Failed ');
                // toastr.error(jqXHR.responseText, '-'); 
                alert(jqXHR.responseText);

            }

        });

    }
</script>