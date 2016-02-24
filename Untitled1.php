sdfasdfasdfasdf
asdfadfadfsadf
sfasdfadffdaf
function getExcelHeaders($data,$debug)
{

	global $firstColumn,$lastColumn,$emailColumn,$phoneColumn, $vinColumn, $iDENColumn,$siteColumn,$groupColumn,$macColumn,$labelColumn;
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++)
	{
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"first")==0||strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"first name")==0)
		{
			$firstColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"last")==0||strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"last name")==0)
		{
			$lastColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"email")==0)
		{
			$emailColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"phone")==0||strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"company phone number")==0||strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"phone number")==0||strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"number")==0)
		{
			$phoneColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"vin")==0)
		{
			$vinColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"iden")==0)
		{
			$iDENColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"site")==0)
		{
			$siteColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"group")==0)
		{
			$groupColumn=$j;
		}
		if(strcmp(strtolower($data->sheets[0]['cells'][1][$j]),"mac")==0)
		{
			$macColumn=$j;
		}
	}

	if($phoneColumn==0)
	{
		if($debug==1)
		echo "\n<br />Column Error: Require phone column<br>";
		return 0;
	}
	else
	{

		return 1;
	}

}