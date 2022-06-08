db.teams.insertMany([
    {name:"Milan", coach:"Stefano Pioli", players:["Bakayoko", "Bennacer", "Castillejo", "Díaz", "Kessie", "Krunić", "Messias", "Ibrahimović", "Maldini", "Lazetić", "Maignan"]},
	{name:"Ajax", coach:"Carlo Ancelotti", players:["Courtois", "Lunin", "Militão", "Munich", "Alaba", "Portero", "Carvajal", "Vallejo"]},
	{name:"Liverpool", coach:"Jürgen Klopp", players:["Adjust", "Filters", "Alisson", "Adrián", "Kelleher", "Karius", "Pitaluga", "Dijk", "Gomez"]},
	{name:"Chelsea", coach:"Thomas Tuchel", players:["Kepa", "Arrizabalaga", "Édouard", "Mendy", "Marcus", "Bettinelli", "Lucas", "Bergström", "Sharman-Lowe", "Rüdiger", "Alonso"]},
	{name:"Juventus", coach:"Massimiliano Allegri", players:["Sandro", "Rugani", "Danilo", "Chiellini", "Cuadrado", "Bonucci", "Pellegrini", "Matthijs", "Zakaria", "Bernarderschi"]},
	{name:"Barcelona", coach:"Xavier Hernandez Creus", players:["Marc-André", "Stegen", "Neto", "Lazar", "Carevic", "Arnau", "Tenas", "Onyango", "Dest", "Gerard", "Piqué", "Alves"]},
	{name:"Bayern", coach:"Julian Nagelsmann", players:["Neuer", "Starke", "Ulreich", "Frücht", "Dayot", "Upamecano", "Richards", "Süle", "Pavard"]}
]);

db.games.insertMany([
    {league:"1", date:"2019-11-27", place:"Amsterdam",   Team1:"Ajax", Team2:"Juventus", score:"0:1"},
	{league:"1", date:"2021-10-12", place:"Bern ",       Team1:"Liverpool", Team2:"Milan", score:"0:2"},
	{league:"1", date:"2021-07-11", place:"London",      Team1:"Barcelona", Team2:"Bayern", score:"2:1"},
	{league:"1", date:"2018-05-01", place:"Budapest",    Team1:"Milan", Team2:"Bayern", score:"1:1"},
	{league:"2", date:"2020-09-16", place:"Brussels ",   Team1:"Ajax", Team2:"Milan", score:"0:2"},
	{league:"2", date:"2019-12-13", place:"Berlin",      Team1:"Liverpool", Team2:"Chelsea", score:"3:1"},
	{league:"3", date:"2021-03-09", place:"Copenhagen ", Team1:"Chelsea", Team2:"Ajax", score:"1:0"},
	{league:"3", date:"2021-10-10", place:"Bratislava",  Team1:"Juventus", Team2:"Barcelona", score:"2:0"},
	{league:"3", date:"2022-02-05", place:"Paris",       Team1:"Milan", Team2:"Liverpool", score:"1:1"}
]);