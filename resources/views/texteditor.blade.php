<x-header pagename="Text Editor"/>

<div id="main">
    <div class="container">
        <p class="text-center">Enter your text and submit to get it in another form</h1>
        <div class="inputarea">
         <div class="row">   
             <div class="col-md-6">
                 <h3>Input </h3>
                <form action="" method="post">
                    @csrf
                    <textarea name="t1" id="inputdata" cols="30" rows="10"  placeholder="Enter String">
                    {{session('input')}}</textarea>
                    <div id="formats">
                        <button onclick="window.location.href='/texteditor';" name="b1" value="sentence">Sentence</button>
                        <button onclick="window.location.href='/texteditor';" name="b1"  value="lower">lowercase</button>
                        <button onclick="window.location.href='/texteditor';" name="b1"  value="upper">UPPER CASE</button>
                        <button onclick="window.location.href='/texteditor';" name="b1"  value="capitalize">Capitalize Case</button>
                        <button onclick="window.location.href='/texteditor';" name="b1"  value="alternate">AlTeRnAtE cAsE</button>
                    </div>
                    <!-- <input type="submit" name="submit" value="Submit"> -->
                </form>
                <div id="meta">
                Character Count: <span></span>
                </div>
             </div>
             <div class="col-md-6" id="output">
                 <h3>Output</h3>
                    <textarea name="t1" id="inputdata" cols="30" rows="10">
                        {{session('status')}}</textarea>
                </form>
             </div>
         </div>
        </div>

    </div>
</div>


