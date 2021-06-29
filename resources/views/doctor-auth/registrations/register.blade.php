<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Doctor Registeration </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/doctor_style/doctor_register.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>
    <form class="box2" method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
        @csrf
        <h2> Registeration </h2>

        <input type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required>
        @error('first_name')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
        <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
        @error('last_name')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password"
            value="{{ old('password_confirmation') }}" required>

        <input type="number" name="age" placeholder="Your Age" value="{{ old('age') }}" required>
        @error('age')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="gender" name="gender">
            <option disabled selected> Select your Gender </option>
            <option value="Male" @if (old('gender') == 'Male') {{ 'selected' }} @endif>Male</option>
            <option value="Female" @if (old('gender') == 'Female') {{ 'selected' }} @endif>Female</option>
        </select>

        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
        @error('phone')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="text" name="address" placeholder="Your Address" value="{{ old('address') }}" required>
        @error('address')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="governorate" name="governorate" id="main_menu" onchange="populate(this.id, 'sub_menu')">
            <option value="ch" disabled selected>Select a Governorate</option>
            <option value="Alexandria" @if (old('governorate') == 'Alexandria') {{ 'selected' }} @endif>Alexandria</option>
            <option value="Aswan" @if (old('governorate') == 'Aswan') {{ 'selected' }} @endif>Aswan</option>
            <option value="Asyut" @if (old('governorate') == 'Asyut') {{ 'selected' }} @endif>Asyut</option>
            <option value="Beheira" @if (old('governorate') == 'Beheira') {{ 'selected' }} @endif>Beheira</option>
            <option value="Beni Suef" @if (old('governorate') == 'Beni Suef') {{ 'selected' }} @endif>Beni Suef</option>
            <option value="Cairo" @if (old('governorate') == 'Cairo') {{ 'selected' }} @endif>Cairo</option>
            <option value="Dakahlia" @if (old('governorate') == 'Dakahlia') {{ 'selected' }} @endif>Dakahlia</option>
            <option value="Faiyum" @if (old('governorate') == 'Faiyum') {{ 'selected' }} @endif>Faiyum</option>
            <option value="Giza" @if (old('governorate') == 'Giza') {{ 'selected' }} @endif>Giza</option>
            <option value="Ismailia" @if (old('governorate') == 'Ismailia') {{ 'selected' }} @endif>Ismailia</option>
            <option value="Marsa Matruh" @if (old('governorate') == 'Marsa Matruh') {{ 'selected' }} @endif>Marsa Matruh</option>
            <option value="Minya" @if (old('governorate') == 'Minya') {{ 'selected' }} @endif>Minya</option>
            <option value="Monufia" @if (old('governorate') == 'Monufia') {{ 'selected' }} @endif>Monufia</option>
            <option value="Qena" @if (old('governorate') == 'Qena') {{ 'selected' }} @endif>Qena</option>
            <option value="Red Sea" @if (old('governorate') == 'Red Sea') {{ 'selected' }} @endif>Red Sea</option>
            <option value="Sohag" @if (old('governorate') == 'Sohag') {{ 'selected' }} @endif>Sohag</option>
            <option value="South Sinai" @if (old('governorate') == 'South Sinai') {{ 'selected' }} @endif>South Sinai</option>
        </select>

        <select class="city" name="city" id="sub_menu">
            <option selected> Select a City </option>
        </select>

        <select class="specialty" name="specialty" placeholder="Enter Your Specialty" value="{{ old('specialty') }}">
            <option disabled selected>Enter Your Specialty</option>
            <option value="Internal Medicine" @if (old('specialty') == 'Internal Medicine') {{ 'selected' }} @endif> Internal Medicine</option>
            <option value="Pediatric" @if (old('specialty') == 'Pediatric') {{ 'selected' }} @endif> Pediatric</option>
            <option value="Rheumatology" @if (old('specialty') == 'Rheumatology') {{ 'selected' }} @endif> Rheumatology</option>
            <option value="Oncology" @if (old('specialty') == 'Oncology') {{ 'selected' }} @endif> Oncology</option>
            <option value="Nephrology" @if (old('specialty') == 'Nephrology') {{ 'selected' }} @endif> Nephrology</option>
            <option value="Hematology" @if (old('specialty') == 'Hematology') {{ 'selected' }} @endif> Hematology</option>
            <option value="Endocrinology" @if (old('specialty') == 'Endocrinology') {{ 'selected' }} @endif> Endocrinology</option>
            <option value="Cardiology" @if (old('specialty') == 'Cardiology') {{ 'selected' }} @endif> Cardiology</option>
            <option value="Neurology" @if (old('specialty') == 'Neurology') {{ 'selected' }} @endif> Neurology</option>
            <option value="Psychiaty" @if (old('specialty') == 'Psychiaty') {{ 'selected' }} @endif> Psychiaty</option>
            <option value="Surgery" @if (old('specialty') == 'Surgery') {{ 'selected' }} @endif> Surgery</option>
            <option value="Dentistry" @if (old('specialty') == 'Dentistry') {{ 'selected' }} @endif> Dentistry</option>
        </select>

        <input type = "text" name = "hospital" placeholder = "Hospital Name" value = "{{ old('hospital') }}" required>
        @error('hospital')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <select class="work_day" name="work_day">
            <option disabled selected> Select Your Work Day</option>
            <option value="Saturday" @if (old('work_day') == 'Saturday') {{ 'selected' }} @endif> Saturday</option>
            <option value="Sunday" @if (old('work_day') == 'Sunday') {{ 'selected' }} @endif> Sunday</option>
            <option value="Monday" @if (old('work_day') == 'Monday') {{ 'selected' }} @endif> Monday</option>
            <option value="Tuesday" @if (old('work_day') == 'Tuesday') {{ 'selected' }} @endif> Tuesday</option>
            <option value="Wednesday" @if (old('work_day') == 'Wednesday') {{ 'selected' }} @endif> Wednesday</option>
            <option value="Thursday" @if (old('work_day') == 'Thursday') {{ 'selected' }} @endif> Thursday</option>
            <option value="Friday" @if (old('work_day') == 'Friday') {{ 'selected' }} @endif> Friday</option>
        </select>

        <select class="work_time" name="work_time">
            <option disabled selected> Your Work Appointment </option>
            <option value="From 8 AM to 12 PM" @if (old('work_time') == 'From 8 AM to 12 PM') {{ 'selected' }} @endif>From 8 AM to 12 PM</option>
            <option value="From 10 AM to 2 PM" @if (old('work_time') == 'From 10 AM to 2 PM') {{ 'selected' }} @endif>From 10 AM to 2 PM</option>
            <option value="From 12 PM to 4 PM" @if (old('work_time') == 'From 12 PM to 4 PM') {{ 'selected' }} @endif>From 12 PM to 4 PM</option>
            <option value="From 2 PM to 6 PM" @if (old('work_time') == 'From 2 PM to 6 PM') {{ 'selected' }} @endif>From 2 PM to 6 PM</option>
            <option value="From 4 PM to 8 PM" @if (old('work_time') == 'From 4 PM to 8 PM') {{ 'selected' }} @endif>From 4 PM to 8 PM</option>
            <option value="From 6 PM to 10 PM" @if (old('work_time') == 'From 6 PM to 10 PM') {{ 'selected' }} @endif>From 6 PM to 10 PM</option>
            <option value="From 8 PM to 12 AM" @if (old('work_time') == 'From 8 PM to 12 AM') {{ 'selected' }} @endif>From 8 PM to 12 AM</option>
        </select>

        <input type="file" id="file" name="doctor_image" value="{{ old('doctor_image') }}" required>
        <label for="file">
            <span class="material-icons">
                add_photo_alternate
            </span>
            Upload an Image
        </label>
        @error('doctor_image')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <input type="submit" name="signup" value="Sign Up">
    </form>

    <script type="text/javascript">
        function populate(s1, s2)
        {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            
            if(s1.value == "ch")
            {
                var optionArray = ['city|city'];
            }
            else if(s1.value == "Cairo")
            {
                var optionArray = ['Nasr City|Nasr City', 'Maadi|Maadi', 'Ain Shams|Ain Shams', 'Helwan|Helwan', 'El Shorouk City|El Shorouk City', 'Shubra|Shubra', 'downtown|downtown', 'El Salam City|El Salam City', 'Zamalek|Zamalek', 'Zeitoun|Zeitoun', 'El Marg|El Marg'];
            }
            else if(s1.value == 'Giza')
            {
                var optionArray = ['Giza Square|Giza Square', 'Dokki|Dokki', '6 October City|6 October City', 'Sheikh Zayed City|Sheikh Zayed City', 'El Haram|El Haram', 'Faisal|Faisal', 'Imbaba|Imbaba', 'El Omraniya|El Omraniya', 'New Giza|New Giza', 'El Warraq|El Warraq', 'El Badrashein|El Badrashein', 'El Ayyat|El Ayyat', 'El Wahat El Bahariya|El Wahat El Bahariya'];
            }
            else if(s1.value == 'Alexandria')
            {
                var optionArray = ['El Raml Station|El Raml Station', 'Dekhela|Dekhela', 'Smouha|Smouha', 'Borg El Arab|Borg El Arab', 'Sidi Gaber|Sidi Gaber', 'Moharam Bek|Moharam Bek', 'Montaza|Montaza', 'Abrahamic|Abrahamic', 'Ataren|Ataren', 'Abu Qir|Abu Qir', 'Amriya|Amriya', 'El Ajmi|El Ajmi', 'Asafra|Asafra'];
            }
            else if(s1.value == 'Monufia')
            {
                var optionArray = ['El Bagour|El Bagour', 'Shibin el Kom|Shibin el Kom', 'Menouf|Menouf', 'Sadat City|Sadat City', 'Ashmoun|Ashmoun', 'Birket el Sab|Birket el Sab', 'Quweisna|Quweisna'];
            }
            else if(s1.value == 'Faiyum')
            {
                var optionArray = ['Sinnuris|Sinnuris', 'New Faiyum City|New Faiyum City', 'Tamiya|Tamiya', 'Yousef El Seddik|Yousef El Seddik', 'Itsa|Itsa'];
            }
            else if(s1.value == 'Beheira')
            {
                var optionArray = ['Damanhour|Damanhour', 'Kafr El Dawwar|Kafr El Dawwar', 'Mahmoudiyah|Mahmoudiyah', 'Abu El Matamir|Abu El Matamir', 'Natrn Valley|Natrn Valley', 'Hosh Essa|Hosh Essa'];
            }
            else if(s1.value == 'Marsa Matruh')
            {
                var optionArray = ['Matruh City|Matruh City', 'El Dabaa|El Dabaa', 'El Alamein|El Alamein', 'North Coast|North Coast', 'Siwa Oasis|Siwa Oasis'];
            }
            else if(s1.value == 'Asyut')
            {
                var optionArray = ['Asyut City|Asyut City', 'El Badari|El Badari', 'Dairut|Dairut', 'manfalut|manfalut', 'Abu Tig|Abu Tig', 'New Asyut City|New Asyut City'];
            }
            else if(s1.value == 'Ismailia')
            {
                var optionArray = ['Ismailia City|Ismailia City', 'Fayid|Fayid', 'Tell El Kebir|Tell El Kebir', 'El Qantara|El Qantara'];
            }
            else if(s1.value == 'Red Sea')
            {
                var optionArray = ['Hurghada|Hurghada', 'El Gouna|El Gouna', 'Marsa Alam|Marsa Alam', 'Ras Gharib|Ras Gharib', 'Safaga|Safaga', 'Halaib|Halaib', 'Shalateen|Shalateen'];
            }
            else if(s1.value == 'South Sinai')
            {
                var optionArray = ['Sharm El Sheikh City|Sharm El Sheikh City', 'Nuweiba|Nuweiba', 'Ras Sidr|Ras Sidr', 'Saint Catherine|Saint Catherine', 'Taba|Taba'];
            }
            else if(s1.value == 'Dakahlia')
            {
                var optionArray = ['El Mansoura City|El Mansoura City', 'El Manzala|El Manzala', 'El Senbellawein|El Senbellawein', 'Belqas|Belqas', 'Talkha|Talkha', 'Mit Ghamr|Mit Ghamr', 'Shirbin|Shirbin'];
            }
            else if(s1.value == 'Sohag')
            {
                var optionArray = ['Sohag city|Sohag city', 'New Sohag City|New Sohag City', 'Girga|Girga', 'Tahta|Tahta', 'Tima|Tima'];
            }
            else if(s1.value == 'Minya')
            {
                var optionArray = ['Minya City|Minya City', 'New Minya City|New Minya City', 'Mallawi|Mallawi', 'Abu Qirqas|Abu Qirqas', 'Samalut|Samalut', 'Beni Mazar|Beni Mazar', 'Maghagha|Maghagha'];
            }
            else if(s1.value == 'Qena')
            {
                var optionArray = ['Qena Center|Qena Center', 'New Qena City|New Qena City', 'Luxor City|Luxor City', 'Dishna|Dishna', 'Nag Hammadi|Nag Hammadi', 'Qus|Qus'];
            }
            else if(s1.value == 'Beni Suef')
            {
                var optionArray = ['Beni Suef City|Beni Suef City', 'New Beni Suef City|New Beni Suef City', 'El Wasta|El Wasta', 'Biba|Biba', 'Nasser City|Nasser City', 'Ihnasiya|Ihnasiya', 'Sumusta El Waqf|Sumusta El Waqf', 'El Fashn|El Fashn'];
            }
            else if(s1.value == 'Aswan')
            {
                var optionArray = ['Aswan City|Aswan City', 'New Aswan City|New Aswan City', 'Abu Simbel|Abu Simbel', 'Daraw|Daraw', 'Edfu|Edfu', 'New Tushka City|New Tushka City', 'Kom Ombo|Kom Ombo'];
            }
            for(var option in optionArray)
                {
                    var pair = optionArray[option].split("|");
                    var newoption = document.createElement("option");
                    
                    newoption.value = pair[0];
                    newoption.innerHTML = pair[1];
                    s2.options.add(newoption);
                }
        }
    </script>
</body>

</html>
