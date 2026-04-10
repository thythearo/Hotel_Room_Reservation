
        let feature_s_form = document.getElementById('feature_s_form');
        let facility_s_form = document.getElementById('facility_s_form');


        feature_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_feature();
        });

        function add_feature(){
            let data = new FormData();
            data.append('name', feature_s_form.elements['feature_name'].value);
            data.append('add_feature', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/feature_facilities.php",true);

            xhr.onload = function(){
                console.log(this.responseText);

                var myModal = document.getElementById('feature-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText.trim() == '1'){
                    alert('success', 'New feature Add!');
                    feature_s_form.elements['feature_name'].value='';
                    get_feature();
                }else{
                    alert('error', 'Server Down!');
                }
            }

            xhr.send(data);
        }

        function get_feature(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/feature_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                document.getElementById('feature-data').innerHTML = this.responseText;
            }

            xhr.send('get_feature=1'); // ✅ FIXED
        }

        function remove_feature(val){

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/feature_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                if(this.responseText==1){
                    alert('error', 'Feature is removed!')
                    get_feature();
                }
                else if(this.responseText=='room_added'){
                    alert('error', 'Feature is added in room!');
                }
                else{
                    alert('error', 'Sever Down!');
                }
            }
            
            xhr.send('remove_feature='+val);
        }

        facility_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_facility();
        });

        function add_facility(){
    let btn = facility_s_form.querySelector('button[type="submit"]');

    if(btn.disabled) return;
    btn.disabled = true;

    let data = new FormData();
    data.append('name', facility_s_form.elements['facility_name'].value);

    let file = facility_s_form.elements['facility_icon'].files[0];
    if(!file){
        alert('error','Please select icon');
        btn.disabled = false;
        return;
    }

    data.append('icon', file);
    data.append('desc', facility_s_form.elements['facility_desc'].value);
    data.append('add_facility', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/feature_facilities.php", true);

    xhr.onload = function(){
        btn.disabled = false;

        console.log("Response:", this.responseText); // DEBUG

        var myModal = document.getElementById('facility-s');
        var modal = bootstrap.Modal.getOrCreateInstance(myModal);
        modal.hide();

        if(this.responseText.trim() == '1'){
            alert('success','New facility add!');
            facility_s_form.reset(); 
            get_facilities();
        }else{
            alert('error','Something went wrong!');
        }
    }

    xhr.send(data);
}
        

         function get_facilities(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/feature_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){

                document.getElementById('facilities-data').innerHTML = this.responseText;
            }

            xhr.send('get_facilities=1'); 
        }

        function remove_facility(val){

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/feature_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                if(this.responseText==1){
                    alert('error', 'Facility is removed!')
                    get_facilities();
                }
                else if(this.responseText=='room_added'){
                    alert('error', 'Facility is added in room!');
                }
                else{
                    alert('error', 'Sever Down!');
                }
            }
            
            xhr.send('remove_facility='+val);
        }

        facility_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_facility();
        });

        window.onload = function(){
            get_feature();

            get_facilities();
        }
    
  