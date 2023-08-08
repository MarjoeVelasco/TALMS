<html lang="en-GB">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    a[x-apple-data-detectors] {color: inherit !important;}
  </style>

</head>
<body style="margin: 0; padding: 0;" >
  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background:#edf2f7;">
    <tr>
      <td style="padding: 20px 0 30px 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" >
  <tr>
    <td align="center" style="padding: 20px 0 30px 0;">
		 <br><span style="font-size:20px;color:#3d4852;"><center><strong>TALMS</strong></center></span>
    </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif;">
            <h1 style="font-size: 24px; margin: 0;">Hello {{$name}} !</h1>
          </td>
        </tr>
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
          <p style="margin: 0;text-align:justify;">This is to notify you that <b>{{$employee_name}}</b> has filed a <b>{{$leave_type}}</b> for <b>{{$no_days}} day/s</b> starting from <b>{{date('F d, Y', strtotime($start_date))}}</b> to <b>{{date('F d, Y', strtotime($end_date))}}</b>. Kindly disregard this if you have already performed the necessary actions, otherwise click the button below to login to your account.</p>
          </td>         
        </tr>

        <tr>
          <td>
          <center><a href="https://ilsaam.ils.dole.gov.ph/manageleaves"><button style="border: none;
  border-radius:7px;
  background-color:#17a2b8;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;cursor:pointer;">Click here</button></a></center>  
          </td>
        </tr>

        <tr>
          <td>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
              <tr>
                <td width="260" valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;">
                        <p style="margin: 0;text-align:justify;">If you need help with anything, please let one of the admins know immediately. We're here to help you at any step along the way.</p>
                        <p>- The TALMS team</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#edf2f7" style="padding: 30px 30px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #b5adc5; font-family: Arial, sans-serif; font-size: 14px;">
				 <p style="margin: 0;"><center>&reg; {{$year}} TALMS. All rights reserved.</center>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

      </td>
    </tr>
  </table>
</body>
</html>