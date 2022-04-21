<x-header pagename="Image Converter"/>
<div class="clear"></div>

<div class="container">
    {{session('status')}}
<div id="formsec">
    <form action="imageconverter1" method="post" enctype="multipart/form-data">
        @csrf
            <div class="col-md-6">
                <input type="file" name="media">
            </div>
            <div class="clear"></div>
            <div class="col-md-6">
                <input type="radio" name="format" value="png"><label for="png">Png</label>
                <input type="radio" name="format" value="jpg"><label for="jpg">Jpg</label>
            </div>
            <div class="clear"></div>
            <div class="col-md-6">
                <input type="submit" name="submit" value="convert">
            </div>
    </form>
</div>
</div>