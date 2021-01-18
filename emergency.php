<?php
$i = 0;
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->auth();
// Search by Blood Group
if (isset($_POST['contact'])) {
    $bloodGroup = $_POST['blood_group'];
	$state = $_POST['state'];
    $donors = $db->searchDonorWithBloodGroupANDState($bloodGroup,$state);
}

$title = "EMERGENCY";
$setEmergencyActive = "active";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            <?php if(isset($success)): ?>
            <div class="alert-success fade-out-5"><?= $success; ?></div>
            <?php endif; ?>
            <?php if(isset($message)): ?>
            <div class="alert-danger fade-out-5"><?= $message; ?></div>
            <?php endif; ?>
            
            <form method="post" class="form-horizontal" role="form" action="emergency.php">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>EMERGENCY BLOOD NEEDED</h5>
                    </div>
                    <div class="panel-body">
                        
                        
                        <div class="form-group">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="blood_group" class="form-control">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-4">State:</label>
                            <div class="col-sm-8">
                                <select name="state" class="form-control">
                                    <option value="Selangor">Selangor</option>
                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                    <option value="Putrajaya">Putrajaya</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Johor">Johor</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Terengganu">Terengganu</option>
									<option value="Kelantan">Kelantan</option>
									<option value="Perlis">Perlis</option>
									<option value="Kedah">Kedah</option>
									<option value="Penang">Penang</option>
									<option value="Sabah">Sabah</option>
									<option value="Sarawak">Sarawak</option>
                                </select>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="form-group">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-8">
                                <button class="btn btn-success" type="submit" name="contact" >Contact Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
	
	<div class="row">
        <div class="col-md-1">         
        </div>
        <div class="col-md-10">
            <!-- If the donor is searched by a particular blood group -->
            <?php if(isset($_POST['contact'])): ?>
                <?php if(isset($donors[0])): ?>
                    <label>Total Blood Donor Contacted for <?= $donors[0]['b_type']; ?>:</label> <span class="emphasize"><?= count($donors); ?> Person</span>
                <?php endif; ?>
            <?php endif; ?>
            
            
            
            <!-- if result has been fetched succesffully -->
            <?php if (isset($donors)): ?>
                <table class="table table-condensed">
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>City</th>
                       
                        <th>Mobile</th>
                        <th>Blood Group</th>
                    <tr>
                        <?php foreach ($donors as $d): $i++; ?>
                        <tr class="<?php
                        if ($i % 2 == 0) {
                            echo "bg-success";
                        } else {
                            echo "bg-danger";
                        }
                        ?>" >
                            <td><?= $i; ?></td>
                            <td><a href="profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] . " " . $d['mname'] . " " . $d['lname']; ?></a></td>
                            <td><?= $d['sex']; ?></td>
                            <td><?= wordwrap($d['h_address'], 20, "<br>"); ?></td>
                            <td><?= $d['city']; ?></td>
                            <td><?= $d['mobile']; ?></td>
                            
                            <td><?= $d['b_type']; ?></td>
				
                        </tr>
			<? 
			$location = "hospital";
			if($d['city']=="Selangor")
			{
				$location = "Hospital Tengku Ampuan Rahimah Klang";
			}
			
			$phone= $d['mobile'];
			$message= echo "Hello sir/madam $d['fname'] , we are from Blood Bank , currently we need your $d['b_type'] type blood to help our 
			patients , please come to $location to donate . Thank you so much";
			$data = [
    			'phone' => $phone, // Receivers phone
    			'body' => 'Hey We need your blood', // Message
			];
			$json = json_encode($data); // Encode data to JSON
			// URL for request POST /message
			$url = 'https://eu138.chat-api.com/instance217009/message?token=7thsblhx453bhpio';			
			// Make a POST request
			$options = stream_context_create(['http' => [
        		'method'  => 'POST',
        		'header'  => 'Content-type: application/json',
       		 	'content' => $json
    			]
			]);
			// Send a request
			$result = file_get_contents($url, false, $options);
			
			?>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
	
	
</div>

<?php include 'layout/_footer.php'; ?>
