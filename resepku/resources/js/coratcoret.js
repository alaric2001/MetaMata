$(document).ready(function(){
            $(".add_item_btn").click(function(e){
                e.preventDefault();
                $("#show_item").prepend(`<div>
                                <input type="text" class="form-control" name="bahan" placeholder="">
                                <div>
                                    <a href="" class="remove_item_btn" style="font-family: 'Ubuntu'; font-style: normal; font-weight: 400; font-size: 14px;
                                    line-height: 21px; text-decoration: none; color:black">- Item Bahan</a>
                                </div>
                            </div>`);
            });

            $(document).on('click', '.remove_item_btn', function(e){
                e.preventDefault();
                let tempatinput = $(this).parent().parent();
                $(tempatinput).remove();
            });
        });
        $(document).ready(function(){
            $('#add_item_btn').on('click', function(e){
                e.preventDefault();
                var html= ``;
                    html+=`<div>
                                <input type="text" class="form-control" name="bahan" placeholder="">
                                <div>
                                    <a href="" class="remove_item_btn" style="font-family: 'Ubuntu'; font-style: normal; font-weight: 400; font-size: 14px;
                                    line-height: 21px; text-decoration: none; color:black">- Item Bahan</a>
                                </div>
                            </div>`;
                    $('#show_item').append(html);

            });
        });


        $(document).on('click', '#add_data', function () {
            let bahan = []

            $('.bahan').each(function(){
                bahan.push($(this).text())
            })

         $.ajax({
          type: "POST",
          url: "/add_resep",
          data: {
            bahan : bahan,
            "_token" : "{{ csrf_token() }}"
          },
          success: function(res){
            console.log(res);
          },
          error: function(xhr){
            console.error(xhr);
          }
         });

        });