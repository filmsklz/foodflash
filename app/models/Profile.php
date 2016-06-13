class Profile extends Eloquent {

    public $timestamps = false;
    protected $table = 'tbl_profile';

}
// ดึงข้อมูล
$profiles = Profile::all();

// แสดงข้อมูล
foreach ($profiles as $recode){
    echo $recode->user_id;
    echo $recode->firstname;
    echo $recode->lastname;
}
