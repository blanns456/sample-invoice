@extends('layouts.app')

@section("datestyle")
    <style>
       .weeklycontainer{
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
       }
    </style>
@endsection

@section('content')
    <div class="container-xl">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 weeklycontainer">
                <h1 class="text-center pb-4">Weekly Range Picker</h1>
                <div class="row justify-content-center">
                        <input type="date" id="startDate" name="startDate" class="col-md-4">
                        <p class="col-md-4 text-center">&nbsp;to&nbsp;</p>
                        <input type="date" id="endDate" name="endDate" class="col-md-4">
                        <button onclick="getSelectedRange()" class="btn btn-primary col-md-4 mt-md-4 mt-5">Get Selected Range</button>

                </div>
                <p id="selectedRangeText"></p>
            </div>
        </div>
    </div>
@endsection

@section("datepickerscript")
    <script>
        $(document).ready(function(){
            Date.prototype.addDays = function(days) {
                var date = new Date(this.valueOf());
                date.setDate(date.getDate() + days);
                console.log(date);
                return date.toISOString().substring(0, 10);
            }
            $("#startDate").change(function(){
                let startDate = new Date($(this).val());
                // console.log(startDate.getDay());
                let enddate = startDate.addDays(6);
                console.log(enddate);
                // enddate =`${enddate.getFullYear()}-${enddate.getMonth()}-${enddate.getDay()}`;
                $("#endDate").val(enddate);
                // console.log(enddate);
            })
        })
    // function getSelectedRange() {
    //   const startDateInput = document.getElementById('startDate');
    //   const endDateInput = document.getElementById('endDate');

    //   const startDate = new Date(startDateInput.value);
    //   const endDate = new Date(endDateInput.value);

    //   // Adjust the start date to the previous Sunday if it's not already a Sunday
    //   const daysToSunday = (startDate.getDay() === 0) ? 0 : startDate.getDay();
    //   startDate.setDate(startDate.getDate() - daysToSunday);

    //   // Set the end date to 6 days after the adjusted start date (to make it a week)
    //   endDate.setDate(startDate.getDate() + 6);
    //   console.log(endate);

    //   // Format the dates to display
    //   const formattedStartDate = startDate.toLocaleDateString('en-US');
    //   const formattedEndDate = endDate.toLocaleDateString('en-US');

    //   document.getElementById('selectedRangeText').textContent = `Start Date: ${formattedStartDate}, End Date: ${formattedEndDate}`;
    // }
  </script>
@endsection
