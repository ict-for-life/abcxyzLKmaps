<?php

require_once "../DB/connection.php";

global $connection;

$type = $_GET['type'];
$subType = $_GET['subType'];

if (isset($_GET['type']) && isset($_GET['subType'])) {

    if ($_GET['type'] == "Province" && $_GET['subType'] == "none") {

        $sql = "SELECT idtb_province , province_name FROM tb_province";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            $data = "<option>Please Select</option>";
            while ($row = mysqli_fetch_assoc($result)) {

                $data = $data . "<option value=" . $row["idtb_province"] . ">" . $row["province_name"] . "</option>";
            }
            echo $data;
        } else {

            echo 'Error';
        }
        mysqli_close($connection);
    } else {

        if ($_GET['type'] == "District") {

            $sql = "SELECT idtb_district,district_name FROM tb_district WHERE tb_province_idtb_province = '" . $subType . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {

                 $data = "<option>Please Select</option>";
                while ($row = mysqli_fetch_assoc($result)) {

                    $data = $data . "<option value=" . $row["idtb_district"] . ">" . $row["district_name"] . "</option>";
                }
                echo $data;
            } else {

                echo 'Error';
            }
            mysqli_close($connection);
        }
        if ($_GET['type'] == "DS") {

            $sql = "SELECT idtb_DSDivision,DSDivision_name FROM tb_DSDivision WHERE tb_district_idtb_district = '" . $subType . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {

                $data = "<option>Please Select</option>";
                while ($row = mysqli_fetch_assoc($result)) {

                    $data = $data . "<option value=" . $row["idtb_DSDivision"] . ">" . $row["DSDivision_name"] . "</option>";
                }
                echo $data;
            } else {

                echo 'Error';
            }
            mysqli_close($connection);
        }
        if ($_GET['type'] == "LA") {

            $sql = "SELECT idtb_localAuthority,localAuthority_name FROM tb_localAuthority WHERE tb_DSDivision_idtb_DSDivision = '" . $subType . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {

               $data = "<option>Please Select</option>";
                while ($row = mysqli_fetch_assoc($result)) {

                    $data = $data . "<option value=" . $row["idtb_localAuthority"] . ">" . $row["localAuthority_name"] . "</option>";
                }
                echo $data;
            } else {

                echo 'Error';
            }
            mysqli_close($connection);
        }
        if ($_GET['type'] == "Ward") {

            $sql = "SELECT idtb_ward,ward_name FROM tb_ward WHERE tb_localAuthority_idtb_localAuthority = '" . $subType . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {

               $data = "<option>Please Select</option>";
                while ($row = mysqli_fetch_assoc($result)) {

                    $data = $data . "<option value=" . $row["idtb_ward"] . ">" . $row["ward_name"] . "</option>";
                }
                echo $data;
            } else {

                echo 'Error';
            }
            mysqli_close($connection);
        }
        if ($_GET['type'] == "gn") {

            $sql = "SELECT idtb_GNDivision,GNDivision_name FROM tb_GNDivision WHERE tb_ward_idtb_ward = '" . $subType . "'";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {

                $data = "<option>Please Select</option>";
                while ($row = mysqli_fetch_assoc($result)) {

                    $data = $data . "<option value=" . $row["idtb_GNDivision"] . ">" . $row["GNDivision_name"] . "</option>";
                }
                echo $data;
            } else {

                echo 'Error';
            }
            mysqli_close($connection);
        }
    }
}
