let now_time=9999;
function countup()
{
		if(now_time>0)
		{
			now_time--;
			if(parseInt(now_time/10)%10==0)
			{
		    jQuery( '.time' ) .text(parseInt(now_time/100)+":"+0+(now_time-(parseInt(now_time/100)*100)));
			}
			else
			{
	      jQuery( '.time' ) .text(parseInt(now_time/100)+":"+(now_time-(parseInt(now_time/100)*100)));
			}
	  }
    $('.time').css('font-size','50px');

			$('.time').css('font-color','red');
		
  }
function timer()
{
		setInterval("countup('font_size')", 10);
}
timer();
