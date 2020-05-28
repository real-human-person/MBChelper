#time{
    text-align: left;
    width: 100%;
    height: auto;
    font-size: 10px;
    position: absolute;
    margin-top: 6px;
    margin-left: 6px;
}

#footer{

}

#heading{
   right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
border-bottom: 1px solid black;

top:0;
    position: fixed;
background: #ffffff;
z-index:99;
width:100%;
}

#head{
max-width:1000px;
   right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
padding:5px;
}

html{
	font-family:'Arial';

}

body{font-family:'Arial';}

#ticker{
    font-size: .7em;
    margin: auto;
    position: relative;
    width: auto;
    text-align: center;
}

h1{
    text-align:center;
    font-size:1em;
    padding:0;
    margin:0px;
}

button#navNxt{
    display:none;
    background:none;
    border:none;
    margin:0;
    padding:0;
    font-size: 14pt;
}
button#navNxt:hover{
    color: rgba(255,0,0,1.0);

}
a#next_last{
 font-weight:normal;
 color: black;
 font-size:.75em;
 text-decoration:none;
}

a#next_last:hover{
    color: rgba(0,0,255,.75);
}

.left_link{
    float:left;
}

.right_link{
    float:right;
}

#table_title{
	width: 100%
	margin:auto;
	padding:0px;
	text-align: center;
	font-size: 12pt;
	font-weight: bold;

}

th{
    text-align: center;
    font-size: 14px;
}

#orderbooks{
    
top:55px;
margin:auto;
	position:relative;
	max-width: 950px;
	overflow-y: hidden;
}

#orderbook{
    display: inline;
    float:left;
    width: 450px;

}

#tradebook{
    display: inline;
    float:right;
    width: 450px;

}
#aligned{
	float:right;
}
td#data{
	padding-left:5px;
	padding-right:5px;
	font-size:13px;
}

table#data_tables{
	border-collapse: collapse;
	margin: auto;
	padding: 1px;
	width: 100%;
}

td{
    border-collapse: collapse;
    width:auto;
}

tr:nth-child(n+2):nth-child(-n+23){
    background-color:#ebdef0;
}

/*
tr:nth-child(even){
    background-color:#ddd;
}
tr:nth-child(23){
    border-bottom: 2px black;
}
*/

@media (max-width: 925px){

    .hide1{
        display: none;
    }
    #orderbooks{
        width:auto;
}
    
    #tradebook{
        width:auto;

	display: inline    
    }

}

@media (max-width: 865px){
    .hide2{
        display: none;
    }
    #orderbooks{
        width: auto;
        

    }
    #tradebook{
        width:auto;
}
}

@media (max-width: 740px){
    td#data{
        font-size:11px;
    }
    #orderbooks{
        width: auto;
        
    }
    #tradebook{
        width:auto;
        
	display: inline    
    }
}

@media (max-width: 666px){
   #tradebook {
        display: none;
    }
    #orderbook{
        float: none;
        width: auto;
        margin: auto;
    }
    #orderbooks{
        max-width: 500px!important;
        top: 48px;
    }
    button#navNxt{
        display:inline-block;
        position: absolute;
        float: right;
        right: 0px;
    }
    #tradebook{
        width: 100%;

    }
    #table_title{
        text-align:center;
        }
    #ticker{
    	font-size:.6em;
    	top:2px;
    	}
}


