$(function(){
   
    var sels = $(".fake-sel");
    
    var imgs_ = [
        [
            "./img/AR.gif",
            "./img/BR.gif",
            "./img/CL.gif",
            "./img/PY.gif",
            "./img/UY.gif",
          ],
    ];
 
    sels.each(function(x){
       
       var $t = $(this);
       
       var opts_ = '', first;
       
       $t.find("option").each(function(i){
          
          if(i == 0){
             first = "<li><img src='"+ imgs_[x][i] +"'>"+ $(this).text() +"</li>";
          }
          opts_ += "<li"+ (i == 0 ? " class='ativo'" : '') +"><img src='"+ imgs_[x][i] +"'>"+ $(this).text() +"</li>";
       });
 
       $t
       .wrap("<div class='fake-sel-wrap'></div>")
       .parent()
       .css("width", $t.outerWidth()+60)
       .append("<ul>"+ first+opts_ +"</ul>")
       .find("ul")
       .on("click", function(e){
          e.stopPropagation();
          $(".fake-sel-wrap ul")
          .not(this)
          .removeClass("ativo");
          $(this).toggleClass("ativo");
       })
       .find("li:not(:first)")
       .on("click", function(){
          $(this)
          .addClass("ativo")
          .siblings()
          .removeClass("ativo")
          .parent()
          .find("li:first")
          .html($(this).html());
          
          $t.val($(this).text());
          
       });
    });
    
    $(document).on("click", function(){
       $(".fake-sel-wrap ul").removeClass("ativo");
    });
    
 });