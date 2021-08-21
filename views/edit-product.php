<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/login.css">
    
</head>
</head>
<body>

    <?php include dirname(__DIR__).'/views/common/header.php'; ?>
    
    <main>
        <form action="" class='m-4'>
            <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">
            </textarea>
            </div>

            <button id='demo' type='button' class="btn btn-primary">Demo embed</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
    </main>
    

    <?php include dirname(__DIR__).'/views/common/footer.php'; ?>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ))
            .then( editor => {
                window.editor = editor;       
            })
            .catch( error => {
                console.error( error );
            });

        $(function() {
            $('#demo').click(function() {
                console.log('click');
                let content = `<figure class="image">
                    <img src="https://nld.mediacdn.vn/2020/5/12/23723766-0-image-a-181579697765141-15892455662811158088874.jpg" alt="...">
                    <figcaption>A caption goes here...</figcaption>
                </figure>`;
                const viewFragment = editor.data.processor.toView( content );
                const modelFragment = editor.data.toModel( viewFragment );
                editor.model.insertContent( modelFragment );
            });
        });
    </script>
</body>
</html>