
<div>
    <h1 id="titleOpacity">La página</h1>
</div>

<br>

<script type="text/javascript">
    var global  = "lñaskskallaks";
</script>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#team" aria-controls="home" role="tab" data-toggle="tab">
            Equipos
        </a>
    </li>
    <li role="presentation">
        <a href="#match" aria-controls="profile" role="tab" data-toggle="tab">
            Partidos
        </a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="team">
        {{ partial("partials/teamTab") }}
    </div>
    <div role="tabpanel" class="tab-pane" id="match">
        {{ partial("partials/matchesTab") }}
    </div>
  </div>
</div>

<script type="text/javascript">

    $(window).scroll(function() {

        // calculate the percentage the user has scrolled down the page
        var scrollPercent = ($(window).scrollTop() / $(document).height()) * 100;

        switch (Math.floor(scrollPercent)) {
            case 2:
                    $("#titleOpacity").css("opacity", "0.8");
                break;
            case 5:
                    $("#titleOpacity").css("opacity", "0.7");
                break;
            case 7:
                    $("#titleOpacity").css("opacity", "0.6");
                break;
            case 10:
                    $("#titleOpacity").css("opacity", "0.5");
                break;
            case 13:
                    $("#titleOpacity").css("opacity", "0.4");
                break;
            case 15:
                    $("#titleOpacity").css("opacity", "0.2");
                break;
        }
    });
</script>
