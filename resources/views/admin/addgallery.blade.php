@extends('admin.header')
@section('admin')

    <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Add Gallery</h2>
                    <div class="mdl-card__subtitle"></div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="/adgallery" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        <!-- @method('PUT') -->

                        <div class="form__article">
                           
                        <div class="form__article employer-form__contacts">
                            <!-- <h3>Contacts</h3> -->

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left"></i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="phone" name="event">
                                        <label class="mdl-textfield__label" for="phone">add event name</label>
                                    </div>
                                    <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left"></i>
                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <!-- <input class="mdl-textfield__input" type="file" id="phone" name="gallery[]" multiple> -->
                                        
                                        <div class="form-group"> <label for="file">Choose File</label> <input type="file" id="file" name="gallery[]" (change)="handleFileInput($event.target.files)"> </div>

                                        <!-- <label class="mdl-textfield__label" for="phone"></label> -->
                                    </div>
                                </div>  
                            </div>                           
                        </div>

                      
                            <button id="submit_button" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                        </div>
                        
                    </form>
                    <script type="javascript">
                    handleFileInput(files: FileList) { this.fileToUpload = files.item(0); }
</script>

                </div>
            </div>
        </main>

</div>

<!-- inject:js -->
@endsection