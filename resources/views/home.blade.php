@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <h1 align="center">PERSONAL DATA SHEET</h1>
<table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
    <tr align="center" bgcolor="#FFD700">
        <td width="174">PERSONAL DATA </td>
        <td width="353">INFORMATION</td>
        <td width="232">PHOTO</td>
    </tr>
<tr>
<td>Name</td>
<td>Alkahfi Syahrir Irmuda</td>
<td rowspan="10" align="center"><img src="{{ Storage::url('public/images/20221202_141616.png') }}" alt="" width="210" height="313"></td>
</tr>
<tr>
    <td>Major</td>
    <td>Information System</td>
</tr>
<tr>
    <td>Level</td>
    <td>Strata-1 (S1)</td>
</tr>
<tr>
    <td>Gender</td>
    <td>Male</td>
</tr>
<tr>
    <td>City/Date of Birth</td>
    <td>Surabaya, December,28 2001</td>
</tr>
<tr>
    <td>College</td>
    <td>Telkom Technology Institute of Surabaya</td>
</tr>
<tr>
    <td>Address</td>
    <td>Jl. Wonokromo tengah V no.8</td>
</tr>
<tr>
    <td>Work</td>
    <td>College Student</td>
</tr>
<tr>
    <td>Hobby</td>
    <td>Plays Football</td>
</tr>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
