(function(n){n.fn.extend({dkScroller:function(t){var i={height:"",containerHeight:"",autoplay:!1,sortable:!1,speed:"slow",displayButtons:!0,buttonsHeight:0,padding:[0,0],margin:[0,0],borderWidth:0,itemsCount:5,ajaxCall:!1,startIndex:15,serviceUrl:"",markup:"",afterScrollerLoad:function(){}},t=n.extend(i,t);return this.each(function(){function y(){u.css("visibility","hidden");f.css("visibility","hidden")}function p(){e.css({width:s/i.itemsCount-(i.padding[0]+i.padding[1]+i.margin[0]+i.margin[1]+i.borderWidth),"padding-left":i.padding[0],"padding-right":i.padding[1],"margin-left":i.margin[0],"margin-right":i.margin[1]});for(var n=0;n<=e.length;n++)e.eq(n).css("background",""),n%i.itemsCount==0?e.eq(n-1).css("background","none"):n==e.length&&e.eq(n-1).css("background","none");b(!0)}function l(){if(o!=0){var n=o/e.outerWidth();n<e.length&&e.length-n>i.itemsCount?(u.removeClass("disabled"),f.removeClass("disabled")):(u.addClass("disabled"),f.removeClass("disabled"),i.ajaxCall&&w())}else e.length<=i.itemsCount?(u.addClass("disabled"),f.addClass("disabled")):(u.removeClass("disabled"),f.addClass("disabled"))}function w(){var l=i.startIndex+i.itemsCount*a,f=r.closest("article").attr("data-sort"),t="",o,s,c;r.closest("article").attr("data-category")!=undefined&&(t='{"match":{"ProductCategories":{"query":"'+r.closest("article").attr("data-category")+'","operator":"and"}}}');o="";f=="Id"&&t==""&&(o='{"match":{"ProductCategories":{"query":"c8 c6124","operator":"or"}}}');s="";f=="LastPeriodSaleCounter"&&t==""&&(s='{"range":{"MinPrice":{"gte":600000}}},');c=n.parseJSON('{"from": '+l+',"size": '+i.itemsCount+',"query": {"bool": {"must": ['+t+'], "must_not": ['+o+']}},"filter": {"bool": {"must": ['+s+'{"term": {"EStatus": 0}}, {"term": {"IsActive": true}}],"should": []}},"sort": [{"'+f+'": {"order": "desc"}},{"LastPeriodViewCounter": {"order": "desc"}}],"_source": ["Id","EnTitle","FaTitle","ExistStatus","ImagePath","ShowType","MinPrice"]}');n.ajax({type:"POST",url:i.serviceUrl,data:JSON.stringify(c),processData:!1,contentType:"application/json; charset=utf-8",dataType:"json",success:function(t){t.hits.hits.length?(a++,n.template("itemsTemplate",i.markup),h.append(n.tmpl("itemsTemplate",t.hits.hits)),e=n(".productItem",r),p(),i.afterScrollerLoad(),h.queue(function(){u.removeClass("disabled");n(this).dequeue()})):u.addClass("disabled")},error:function(n,t,i){window.status="Error [ "+i+" ]"}})}function b(n){n?(r.children(".center").remove(),c.fadeIn(),u.show(),f.show(),v.show()):(c.addClass("hidden"),u.hide(),f.hide(),v.hide(),r.append("<div class='center rtl' style='height:"+i.height+"px;position:relative'><img src='"+TemplateServerUrl+"Image/Public/galleryloading.gif' alt='لطفاً چند لحظه صبر نمایید ...' style='position:absolute;top:"+(i.height/2-16)+"px' /><\/div>"))}var s,a=0,o=0,i=t,r=n(this),c=n(".scroller",r),h=n(".items",r),e=n(".productItem",r),u=n(".next",r),f=n(".prev",r),v=n(".more",r);b(!1);s=r.width()-(u.outerWidth(!0)+f.outerWidth(!0));c.width(s).height(i.height);u.css("margin-top",i.containerHeight/2-i.buttonsHeight/2);f.css("margin-top",i.containerHeight/2-i.buttonsHeight/2);h.css("right","0");p();l();i.ajaxCall&&w();i.displayButtons||(y(),r.mouseenter(function(){u.css("visibility","visible");f.css("visibility","visible")}).mouseleave(function(){y()}));u.click(function(){u.is(".disabled")||(o+=s/i.itemsCount*i.itemsCount,h.stop(!0,!0).animate({right:-o},i.speed),l())});f.click(function(){f.is(".disabled")||(o-=s/i.itemsCount*i.itemsCount,h.stop(!0,!0).animate({right:-o},i.speed),l())})})}})})(jQuery)