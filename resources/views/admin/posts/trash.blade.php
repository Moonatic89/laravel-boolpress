        <!-- if($request->file('image')){
        // validate Image

      // $image_path = Storage::put('post_images', $request->file('image'));

        $image_path=$request->file('image')->store('post_images');
        $validated['image'] = $image_path;
        } -->