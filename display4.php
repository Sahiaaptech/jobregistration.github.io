<?php
include 'connection.php';
include 'links.php';
$sql = 'select * from jobregistration';
$res = mysqli_query($con,$sql);
$html = '<table class="table table-bordered"><tr><th>Name</th><th>Email</th><th>Post</th><th>Reference</th><th>Degree</th></tr>';
while($row = mysqli_fetch_assoc($res))
{
    $html .= '<tr><td>'.$row['Name'].'</td><td>'.$row['Email'].'</td><td>'.$row['Post'].'</td><td>'.$row['Refer'].'</td><td>'.$row['Degree'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=randomfile.xls');
echo $html;

?>