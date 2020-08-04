<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>

<body>
    <ul>
        <li><a href="grades.php">Grades</a></li>
        <li><a>Overview</a></li>
    </ul>
    <div class="container">

        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="title">QV-Calculator</h1>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="subj">Choose a subject</label>

                        <select name="subj" id="subj">
                            <option value="modul100">Modul 100</option>
                            <option value="modul101">Modul 101</option>
                            <option value="modul104">Modul 104</option>
                            <option value="modul105">Modul 105</option>
                            <option value="modul114">Modul 114</option>
                            <option value="modul117">Modul 117</option>
                            <option value="modul120">Modul 120</option>
                            <option value="modul122">Modul 122</option>
                            <option value="modul123">Modul 123</option>
                            <option value="modul133">Modul 133</option>
                            <option value="modul150">Modul 150</option>
                            <option value="modul151">Modul 151</option>
                            <option value="modul152">Modul 152</option>
                            <option value="modul153">Modul 153</option>
                            <option value="modul183">Modul 183</option>
                            <option value="modul214">Modul 214</option>
                            <option value="modul223">Modul 223</option>
                            <option value="modul226A">Modul 226A</option>
                            <option value="modul226B">Modul 226B</option>
                            <option value="modul242">Modul 242</option>
                            <option value="modul254">Modul 254</option>
                            <option value="modul304">Modul 304</option>
                            <option value="modul305">Modul 305</option>
                            <option value="modul306">Modul 306</option>
                            <option value="modul307">Modul 307</option>
                            <option value="modul326">Modul 326</option>
                            <option value="modul335">Modul 335</option>
                            <option value="modul403">Modul 403</option>
                            <option value="modul404">Modul 404</option>
                            <option value="modul411">Modul 411</option>
                            <option value="modul426">Modul 426</option>
                            <option value="modul431">Modul 431</option>

                        </select>
                    </div>
                    <div class="col-sm-6">
                        <br>
                        <input class="form-control" name="username" id="username" maxlength="20" required autofocus><br>

                        <div class="save">
                            <button class="btn btn-secondary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>

    </div>
</body>