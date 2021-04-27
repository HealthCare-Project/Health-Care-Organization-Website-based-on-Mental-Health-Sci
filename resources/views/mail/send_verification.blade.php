Hello, {{$email_data["first_name"]}} {{$email_data["last_name"]}}
{{$email_data["verification_code"]}}
<a href="homestead.test/verify?code={{$email_data['verification_code']}}">Click here to activate</a>