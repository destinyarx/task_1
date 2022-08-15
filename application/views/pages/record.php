
<h1 class="text-center"> <?= $title ?> </h1>

<div class="d-flex justify-content-center "> 

    <div class="d-inline-block justify-content-center border border-success  rounded-4">
        <div class="p-0">
            <table class="table table-hover ">
                        <thead class="thead-light">
                            <tr>
                                <th >Name</th>
                                <th >Age</th>
                                <th >Disease</th>
                            </tr>
                        </thead>
                                                    
                        <tbody>                                   
                            <?php foreach($record as $row){ ?> 
                                <tr class="row100 body">
                                    <td ><?= $row["patient_name"]; ?> </td>
                                    <td ><?= $row["patient_age"]; ?> </td>
                                    <td ><?= $row["patient_disease"]; ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>                            
            </table>
        </div> 
    </div>
</div>