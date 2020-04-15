<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>jQuery Form Cloner Example</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
        html,
        body {
            margin: 0;
            padding: 10px;
            font-family: "Open Sans", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #fafafa;
        }

        .container {
            margin: 150px auto;
        }

        code {
            background: #f1f1f1;
            display: inline-block;
            padding: 10px;
        }

        .result {
            border: 1px solid #f1f1f1;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <div id="jquery-script-menu">
        <div class="jquery-script-center">
            <ul>
                <li>
                    <a href="https://www.jqueryscript.net/form/form-cloner.html">Download This Plugin</a>
                </li>
                <li>
                    <a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a>
                </li>
            </ul>
            <div class="jquery-script-ads">
                <script type="text/javascript">
                    <!--
                    google_ad_client = "ca-pub-2783044520727903";
                    /* jQuery_demo */
                    google_ad_slot = "2780937993";
                    google_ad_width = 728;
                    google_ad_height = 90;
                    //
                    -->
                </script>
                <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
            </div>
            <div class="jquery-script-clear"></div>
        </div>
    </div>

    <div class="container">
        <h1>jQuery Form Cloner Example</h1>
        <div class="col-sm-12 form-horizontal">
            <div class="clonable-block" data-toggle="cloner" data-options='{"clearValueOnClone":false}'>
                <div class="clonable" data-ss="1">
                    <label for="" class="clonable-increment-html">1 2</label>
                    <input id="person_1" class="form-control clonable-decrement-value clonable-increment-placeholder" type="text" name="person[0]" placeholder="person[0][name][1]" value="5 4" />
                </div>
                <button id="hap" class="clonable-button-add btn btn-primary" type="button">
                    Add person
                </button>
            </div>

            <div class="clonable-block" data-toggle="cloner">
                <div class="clonable" data-ss="1">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label for="person_1" class="col-sm-2 clonable-increment-for">Person
                                    <span class="clonable-increment-html">#1</span></label>
                                <div class="col-sm-10">
                                    <input id="person_1" class="form-control clonable-increment-id clonable-increment-placeholder clonable-increment-name" type="text" name="person[0]" placeholder="person[0][name][1]" />
                                </div>
                            </div>

                            <div class="attributes row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <!-- attr -->
                                    <div class="clonable-block" data-toggle="cloner">
                                        <div class="clonable form-group row" data-clone-number="1">
                                            <label for="attr_1" class="col-sm-2 clonable-increment-for">Child
                                                <span class="clonable-increment-html">#1</span></label>
                                            <div class="col-sm-9">
                                                <input id="attr_1" class="form-control clonable-increment-id clonable-increment-name" type="text" name="attr[0]" />
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-danger clonable-button-close">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <div class="clonable form-group row" data-clone-number="1">
                                            <label for="attr_2" class="col-sm-2 clonable-increment-for">Child
                                                <span class="clonable-increment-html">#2</span></label>
                                            <div class="col-sm-9">
                                                <input id="attr_2" class="form-control clonable-increment-id clonable-increment-name" type="text" name="attr[1]" />
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-danger clonable-button-close">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <button id="sad" class="clonable-button-add btn btn-default" type="button">
                                            Add Child
                                        </button>
                                    </div>
                                    <!-- end attr -->
                                    <br /><br />
                                    <!-- top ten songs -->
                                    <div class="clonable-block" data-toggle="cloner">
                                        <div class="clonable form-group row clonable-clone-number-decrement" data-clone-number="3">
                                            <label for="songs_1" class="col-sm-2 clonable-increment-for">Top
                                                <span class="clonable-decrement-html">3</span>
                                                Songs</label>
                                            <div class="col-sm-9">
                                                <input id="songs_1" class="form-control clonable-increment-id clonable-increment-name" type="text" name="attr[0]" />
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-danger clonable-button-close">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <button class="clonable-button-add btn btn-default" type="button">
                                            Add Song
                                        </button>
                                    </div>
                                    <!-- top ten songs -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-danger clonable-button-close">
                                Delete Person
                            </button>
                        </div>
                    </div>
                    <hr />
                </div>

                <button id="hap" class="clonable-button-add btn btn-primary" type="button">
                    Add person
                </button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha384-7WBfQYubrFpye+dGHEeA3fHaTy/wpTFhxdjxqvK04e4orV3z+X4XC4qOX3qnkVC6" crossorigin="anonymous"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../dist/jquery.cloner.min.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(["_setAccount", "UA-36251023-1"]);
        _gaq.push(["_setDomainName", "jqueryscript.net"]);
        _gaq.push(["_trackPageview"]);

        (function() {
            var ga = document.createElement("script");
            ga.type = "text/javascript";
            ga.async = true;
            ga.src =
                ("https:" == document.location.protocol ?
                    "https://ssl" :
                    "http://www") + ".google-analytics.com/ga.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>