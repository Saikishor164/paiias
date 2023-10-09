i have a form and that code is below i have added names to it and give me th backend code in php language for passing the data to MySql 

<select id="workingprof" required name="workingprof" class="form-control" >
          <option>Select Yes/No</option>  
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>

<select id="residential" required placeholder="Have you joined Any Residential Academy earlier" name="residential" class="form-control" >
            <option> Select Yes/No</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>

<select id="entrance" required placeholder="Select the Centre for Entrance Exam" name="entrance" class="form-control" >
            <option> Select City</option>
          <option value="pune">Pune</option>
          <option value="mumbai">Mumbai</option>
          </select>

<input class="form-control" type="text" placeholder="Student Name" name="name" id="name" required>

<input class="form-control" type="date" placeholder="Date of Birth:" name="dob" id="dob" required>

<input class="form-control" type="text" onkeypress="textonly(event)" placeholder="Father's/Husband's Name" name="father" id="father" required>

<textarea class="form-control" rows="1" cols="50" placeholder="Enter your address here..." id="locala" name="locala" required></textarea>


<input type="tel" class="form-control" name="pin" id="pin1" placeholder="Pincode" onkeypress="numpin(event)" required>

<input type="number" class="form-control" onkeypress="numonly(event)" placeholder="Phone No: " name="phoneno"  required>

<input type="email" class="form-control" placeholder="enter your email" name="email" id="email" required>

<input type="number" class="form-control" name="mobile" id="mobile" placeholder="mobile"  onkeypress="numonly(event)" required>

<textarea class="form-control" id="permanenta" rows="1" cols="50" placeholder="Click check-box to use local address " id="permanenta" name="permanenta" required></textarea>

<input type="number" class="form-control" name="pinp" id="pin2" placeholder="Pincode"  onkeypress="numpin(event)" required>

<input type="number" class="form-control" onkeypress="numonly(event)" placeholder="Phone No: " name="phonenop">

<label for="medium">Medium: <span>*</span> </label>
          <input type="radio" id="english" name="medium" value="english">
          <label for="english">English</label>
          <input type="radio" id="hindi" name="medium" value="hindi">
          <label for="hindi">Hindi</label>
          <input type="radio" id="urdu" name="medium" value="urdu">
          <label for="urdu">Urdu</label>
          <label for="medium">Category:  <span>*</span> </label>
          <input type="radio" id="minority" name="category" value="minority">
          <label for="minority">Minority</label>
          <input type="radio" id="sc" name="category" value="sc">
          <label for="sc">SC</label>
          <input type="radio" id="st" name="category" value="st">
          <label for="st">ST</label>
          <input type="radio" id="women" name="category" value="women">
          <label for="women">Women</label>
          <select id="residentialfac" required name="residentialfac" class="form-control" >
          <option>Select Yes/No</option>  
          <option value="yes">Yes</option>
          <option value="no">No</option>
          </select>

          <input type="text" class="form-control" onkeypress="textonly(event)" name="optional_subject" id="optionalsub">

          <input type="text" class="form-control" name="ma_msc_mcom_board" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" name="ma_msc_mcom_year" onkeypress="numyear(event)" ></td>
              <td><input type="text" class="form-control" name="ma_msc_mcom_subjects" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" name="ma_msc_mcom_percentage" pattern="\d+" >

              <input type="text" class="form-control" onkeypress="textonly(event)" ></td>

              
<td><input type="number" class="form-control" onkeypress="numyear(event)" ></td>
<td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>
<td><input type="number" class="form-control" pattern="\d+" >


<input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" ></td>
              <td><input type="text" class="form-control" onkeypress="textonly(event)" ></td>
              <td><input type="number" class="form-control" pattern="\d+" >


              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="text" class="form-control" onkeypress="textonly(event)" required></td>
              <td><input type="number" class="form-control" onkeypress="numyear(event)" required></td>
              <td><input type="text" class="form-control" pattern="\d+" required></td>
              <td><input type="number" class="form-control" pattern="\d+" required>

              <input type="file" name="file" id="file" required>