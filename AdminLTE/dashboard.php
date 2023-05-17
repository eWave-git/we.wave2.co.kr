<?php
    $sql1 = "select * from well.raw_data where address = 227 and board_number=2 order by create_at desc limit 1";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);

    $sql2 = "select * from well.raw_data where address = 227 and board_number=5 order by create_at desc limit 1";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);

    $sql3 = "select * from well.raw_data where address = 227 and board_number=3 order by create_at desc limit 1";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_array($result3);

    $sql4 = "select * from well.raw_data where address = 227 and board_number=6 order by create_at desc limit 1";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_array($result4);

    $sql5 = "select * from well.raw_data where address = 227 and board_number=4 order by create_at desc limit 1";
    $result5 = mysqli_query($conn, $sql5);
    $row5 = mysqli_fetch_array($result5);

    $sql6 = "select * from well.raw_data where address = 227 and board_number=7 order by create_at desc limit 1";
    $result6 = mysqli_query($conn, $sql6);
    $row6 = mysqli_fetch_array($result6);

    $sql7 = "select * from well.raw_data_8ch where address = 420 and board_type=5 order by create_at desc limit 1";
    $result7 = mysqli_query($conn, $sql7);
    $row7 = mysqli_fetch_array($result7);




//    echo $row['data1'];
//    echo $row['tds_out'];
//    echo $row['pressure_in'];
//    echo $row['pressure_out'];
?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        재배실 1 <!------------------------------------------------------------------------------------------------------------- -->
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도 </span>
                        <span class="info-box-number"><?php echo $row1['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?> <!-- ($row['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도</span>
                        <span class="info-box-number"><?php echo $row1['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">이산화탄소</span>
                        <span class="info-box-number"><?php echo $row1['data3'];?> ppm </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row1['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row1['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">ph</span>
                        <span class="info-box-number"><?php echo $row2['data2'];?> </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data2'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            
            <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->
                    <div class="info-box-content">
                        <span class="info-box-text">EC</span>
                        <span class="info-box-number"><?php echo $row2['data3'];?> mS/cm</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data3'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?> <!-- ($row2['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">PAR</span>
                        <span class="info-box-number"><?php echo $row2['data4'];?> µmol/m^2/s</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data4'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row2['data5'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data5'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row2['data6'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row2['data6'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row2['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
        </div>

        재배실 2 <!------------------------------------------------------------------------------------------------------------- -->
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도</span>
                        <span class="info-box-number"><?php echo $row3['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?> <!-- ($row['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도</span>
                        <span class="info-box-number"><?php echo $row3['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">이산화탄소</span>
                        <span class="info-box-number"><?php echo $row3['data3'];?> ppm </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row3['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row3['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">ph</span>
                        <span class="info-box-number"><?php echo $row4['data2'];?> </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data2'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            
            <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->
                    <div class="info-box-content">
                        <span class="info-box-text">EC</span>
                        <span class="info-box-number"><?php echo $row4['data3'];?> mS/cm</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data3'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?> <!-- ($row2['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">PAR</span>
                        <span class="info-box-number"><?php echo $row4['data4'];?> µmol/m^2/s</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data4'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row4['data5'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data5'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row4['data6'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row4['data6'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row4['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
        </div>

        재배실 3 <!------------------------------------------------------------------------------------------------------------- -->
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도</span>
                        <span class="info-box-number"><?php echo $row5['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row5['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row5['create_at'],5,11);?> <!-- ($row['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도</span>
                        <span class="info-box-number"><?php echo $row5['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row5['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row5['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">이산화탄소</span>
                        <span class="info-box-number"><?php echo $row5['data3'];?> ppm </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row5['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row5['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">ph</span>
                        <span class="info-box-number"><?php echo $row6['data2'];?> </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row6['data2'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row6['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            
            <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->
                    <div class="info-box-content">
                        <span class="info-box-text">EC</span>
                        <span class="info-box-number"><?php echo $row6['data3'];?> mS/cm</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row6['data3'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row6['create_at'],5,11);?> <!-- ($row2['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">PAR</span>
                        <span class="info-box-number"><?php echo $row6['data4'];?> µmol/m^2/s</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row6['data4'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row6['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row6['data5'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row6['data5'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row6['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">-</span>
                        <span class="info-box-number"><?php echo $row6['data6'];?>  </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row6['data6'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row6['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
        </div>


    </div>
        <!-- /.row -->
        저장고 <!------------------------------------------------------------------------------------------------------------- -->
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도1</span>
                        <span class="info-box-number"><?php echo $row7['data1'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data1'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?> <!-- ($row['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도1</span>
                        <span class="info-box-number"><?php echo $row7['data2'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data2'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도2</span>
                        <span class="info-box-number"><?php echo $row7['data3'];?> °C </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data3'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도2</span>
                        <span class="info-box-number"><?php echo $row7['data4'];?> % </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data4'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            
            <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="info-box bg-info">
<!--                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>-->
                    <div class="info-box-content">
                        <span class="info-box-text">온도3 </span>
                        <span class="info-box-number"><?php echo $row7['data5'];?> °C</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data5'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?> <!-- ($row2['create_at'],11,8) -->
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-success">
<!--                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도3</span>
                        <span class="info-box-number"><?php echo $row7['data6'];?> %</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data6'];?>%"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-warning">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">온도4 </span>
                        <span class="info-box-number"><?php echo $row7['data7'];?> °C </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data7'];?> %"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-12">
                <div class="info-box bg-danger">
<!--                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>-->

                    <div class="info-box-content">
                        <span class="info-box-text">습도4 </span>
                        <span class="info-box-number"><?php echo $row7['data8'];?> % </span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $row7['data8'];?>"></div>
                        </div>
                        <span class="progress-description">
                            조회 시점 : <?php echo substr($row7['create_at'],5,11);?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->        <!-- Main row -->





        <div class="row">



            <div class="col-lg-12 col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">section </h3></li>
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">재배실1</a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <!-- 송화버섯 -->
                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                     온도 변화량 (°C)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="Line_Chart_1" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    습도 변화량 (%)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="Line_Chart_2" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    이산화탄소 변화량 (ppm)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="Line_Chart_3" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12">
                                        <!-- Line chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    조도 변화량 (µmol/m^2/s)
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="Line_Chart_4" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                



                            <!-- - -->
                            <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">

                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>

        </div>


 
    
    
</section>
<script src="plugins/jquery/jquery.min.js"></script>

<script>
    $(function () {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

        $("[name='control_checkbox_1']").on('switchChange.bootstrapSwitch',function (e,data) {
            $.ajax({
                url: "../conf/Ajaxcontrol.check.php",
                dataType: 'json',
                data: {relay:'relay1', do_work:data},
                success: function (data) {
                    const do_work = data.pay_load.do_work

                    if (do_work == 1) {
                        $("[name='control_button_1']").text('작동중')

                        $("[name='control_button_1']").addClass("bg-gradient-primary");
                        $("[name='control_button_1']").removeClass("bg-gradient-danger");
                    } else if (do_work == 0) {
                        $("[name='control_button_1']").text('멈춤')

                        $("[name='control_button_1']").addClass("bg-gradient-danger");
                        $("[name='control_button_1']").removeClass("bg-gradient-primary");
                    } else {
                        $("[name='control_button_1']").text('멈춤')

                        $("[name='control_button_1']").addClass("bg-gradient-danger");
                        $("[name='control_button_1']").removeClass("bg-gradient-primary");
                    }
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        });

        $("[name='control_checkbox_2']").on('switchChange.bootstrapSwitch',function (e,data) {
            $.ajax({
                url: "../conf/Ajaxcontrol.check.php",
                dataType: 'json',
                data: {relay:'relay2', do_work:data},
                success: function (data) {
                    const do_work = data.pay_load.do_work

                    if (do_work == 1) {
                        $("[name='control_button_2']").text('작동중')

                        $("[name='control_button_2']").addClass("bg-gradient-primary");
                        $("[name='control_button_2']").removeClass("bg-gradient-danger");
                    } else if (do_work == 0) {
                        $("[name='control_button_2']").text('멈춤')

                        $("[name='control_button_2']").addClass("bg-gradient-danger");
                        $("[name='control_button_2']").removeClass("bg-gradient-primary");
                    } else {
                        $("[name='control_button_2']").text('멈춤')

                        $("[name='control_button_2']").addClass("bg-gradient-danger");
                        $("[name='control_button_2']").removeClass("bg-gradient-primary");
                    }
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        });

        Get_Line_Chart_1_Data()

        // 데이터 불러오기
        function Get_Line_Chart_1_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_Line_Chart_1.data.php",
                dataType: 'json',
                success: function (data) {
                    _Line_Chart_1_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        // 데이터 바인딩 ( 데이터 갖고온것을 차트구조에 맡게 설정 및 html에 뿌려주기 )
        function _Line_Chart_1_update(_data) {
            const dataset = _data.pay_load.dataset
            
            $.plot('#Line_Chart_1', [dataset['tds_in'],dataset['tds_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }


        Get_Line_Chart_2_Data()

        function Get_Line_Chart_2_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_Line_Chart_2.data.php",
                dataType: 'json',
                success: function (data) {
                    _Line_Chart_2_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function _Line_Chart_2_update(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#Line_Chart_2', [dataset['pressure_in'],dataset['pressure_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        Get_Line_Chart_3_Data()

        function Get_Line_Chart_3_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_Line_Chart_3.data.php",
                dataType: 'json',
                success: function (data) {
                    _Line_Chart_3_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function _Line_Chart_3_update(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#Line_Chart_3', [dataset['water_in'],dataset['water_out']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        Get_Line_Chart_4_Data()

        function Get_Line_Chart_4_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_Line_Chart_4.data.php",
                dataType: 'json',
                success: function (data) {
                    _Line_Chart_4_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function _Line_Chart_4_update(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#Line_Chart_4', [dataset['throughput']], {
                grid  : {
                    hoverable  : true,
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor  : '#f3f3f3',
                },
                series: {
                    shadowSize: 0,
                    lines     : {
                        show: true
                    },
                    points    : {
                        show: false
                    }
                },
                lines : {
                    fill : false,
                    color: ['#3c8dbc', '#f56954']
                },
                yaxis : {
                    show: true
                },

                xaxis : {
                    ticks: _data.pay_load.create_at,
                    show: true
                }
            })
        }

        Get_bar_chart_1_Data()

        function Get_bar_chart_1_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_bar_chart_1_.data.php",
                dataType: 'json',
                success: function (data) {
                    _bar_chart_1_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function _bar_chart_1_update(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#bar_chart_1', [dataset['power']], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show: true, barWidth: 0.5, align: 'center',
                    },
                },
                colors: ['#3c8dbc'],
                xaxis : {
                    ticks: _data.pay_load.create_at,
                }
            })
        }

        Get_bar_chart_2_Data()

        function Get_bar_chart_2_Data() {
            $.ajaxSetup({ cache: false });
            $.ajax({
                url: "../conf/Ajax_bar_chart_2_.data.php",
                dataType: 'json',
                success: function (data) {
                    _bar_chart_2_update(data)
                },
                error: function () {
                    // setTimeout(GetData, updateInterval);
                }
            });
        }

        function _bar_chart_2_update(_data) {
            const dataset = _data.pay_load.dataset

            $.plot('#bar_chart_2', [dataset['watertank']], {
                grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                },
                series: {
                    bars: {
                        show: true, barWidth: 0.5, align: 'center',
                    },
                },
                colors: ['#3c8dbc'],
                xaxis : {
                    ticks: _data.pay_load.create_at,
                }
            })
        }

    });
</script>
