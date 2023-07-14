<?php

	function getContactBtId($contactid)
	{
		$con=mysqli_connect("localhost","root","","tourdb");

		$sql = "select *from contact where id = ".$contactid;

		$res = mysqli_query($con, $sql);

		return $res;
	}

	function reply($data)
	{
		$contactid = $data['contactid'];
		$reply = $data['reply'];

		$con=mysqli_connect("localhost","root","","tourdb");

		$sql = "update contact set reply='$reply' where id = '$contactid'";

		$res = mysqli_query($con, $sql);

		return $res;
	}
?>