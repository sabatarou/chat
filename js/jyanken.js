const start_time=9999;
let now_time=start_time;
function countup()
  {
		if(now_time>0)
		{
			now_time--;
			if()
			{
		    jQuery( '#time' ) .text(parseInt(now_time/100)+":"+0+(now_time-(parseInt(now_time/100)*100)));
			}
			else
			{
	      jQuery( '#time' ) .text(parseInt(now_time/100)+":"+(now_time-(parseInt(now_time/100)*100)));
			}
	  }
  }
function time()
{
		setInterval("countup(now_time)", 10);
}
time();
