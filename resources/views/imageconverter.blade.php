<x-header pagename="Image Converter"/>
<div class="clear"></div>

<div class="container">
    {{session('status')}}
<div id="formsec">
    <p class="text-center">Compress JPG, PNG, SVG or GIF with the best quality and compression</p>
    <form action="imageconverter1" method="post" enctype="multipart/form-data">
        @csrf
            <div class="col-md-6" id="fileupload">
                <input type="file" name="media">
            </div>
            <div class="clear"></div>
            <div class="col-md-6">
                <div id="formats">
                <input type="radio" name="format" value="png"><label for="png">Png</label>
                <input type="radio" name="format" value="jpg"><label for="jpg">Jpg</label>
                <input type="radio" name="format" value="jpeg"><label for="jpg">Jpeg</label>
                <input type="radio" name="format" value="webp"><label for="jpg">Webp</label>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6">
                <input type="submit" name="submit" value="Convert Image">
            </div>
    </form>
</div>
</div>