<div id="myModal" class="modal" 
    style="
        display:none; position:fixed; z-index:1; left:0; top:0; 
        width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.4);
">

    <div class="modal-content" 
        style="
            background-color:#1d2a35; margin:15% auto; padding:20px; 
            border:1px solid #888; width:80%; text-align:center; 
            font-weight:bold; color:#04aa6d;
        ">
        <span class="close" onclick="closeModal()" style="color:#04aa6d; float:right; font-size:28px; font-weight:bold;">&times;</span>
        <p 
            id="modalMessage">
            {{ session('message') }}
        </p>
    </div>
</div>

  <script>
    function showModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    window.onload = function() {
        @if(session('message'))
            showModal();
        @endif
    }

    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>