var dashboardApp = new Vue({
  el: '#dashboard',
  data: {
    name : "Tapestry",
    "short_description": "Build a visualization layer for the project dashboard",
    "start_date" : "2018-07-01",
    "target_date" : "2018-11-03",
    "budget" : "4950000",
    "spent" : "3456700",
    "projected_spend": "4740500",
    "weekly_effort_target": 400,
    tasks: [
      {
        "id": '',
        "title": '',
        "type" : '',
        "size" : '',
        "team" : '',
        "status": '',
        "start_date": '',
        "close_date": '',
        "hours_worked":'',
        "perc_complete": '',
        "current_sprint" : ''
      }
    ]
  },
  computed: {
    days_left: function() {
      return moment(this.target_date).diff(momemet(), 'days');
    },
    pretty_target_date: function () {
      return this.pretty_date(this.target_date);
    }
  },

  methods: {
    pretty_date: function(d)
    {
      return moment(d).format('l');
    },
    log (msg) {
      alert(msg);
    },

    pretty_currency: function (val)
    {
      if(val <1e3) {return '$ ' + val}
      if(val <1e6) {return '$ ' + (val/1e3).toFixed(1) + ' k'}
        return '$ ' + (val/1e6).toFixed(1) + ' M'
    },

    complete_class: function(task) {
      if (task.perc_complete == 100 ) {return 'alert-success'}
      if (task.current_sprint && task.hours_worked ==0 ) {return 'alert-warning'}
    },
    fetch_tasks : function() {
      fetch('https://raw.githubusercontent.com/tag/iu-msis/dev/public/p1-tasks.json')
      .then( response => response.json())
      .then(json => {
        dashboardApp.tasks = json;
      console.log(json);
      console.log(this.tasks);
  })
      .catch(function (err) {
        console.log('FETCH ERROR:');
        console.log(err);
      })
    }
    },
    mounted ()
    {
        this.fetch_tasks();
      }
})
