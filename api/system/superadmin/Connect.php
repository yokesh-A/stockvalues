<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap");
:root {
  --primary: #323232;
  --light-bg: #f4f4f4;
  --border: #eee;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  font-family: Lato;
}

body {
  background-color: var(--light-bg);
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: var(--primary);
}

.card {
  width: 100%;
  max-width: 1100px;
  background-color: #fff;
  padding: 3rem;
}

.card__header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: -15px;
}

.card__profile img {
  border-radius: 50%;
  height: 5rem;
  width: 5rem;
  -o-object-fit: cover;
     object-fit: cover;
}

.card__name {
  margin-left: 1.25rem;
}

.card__handle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 3px;
}

.card__button svg {
  height: 1.05rem;
  width: 1.05rem;
  margin-right: 5px;
}

.card__button {
  margin-left: auto;
}

.card__button button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 1.05rem;
  background-color: var(--primary);
  color: white;
  font-weight: bold;
  border: none;
  height: 40px;
  width: 100px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  cursor: pointer;
}

.card__button button:active {
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
}

.card__heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

span.circle {
  height: 3px;
  width: 3px;
  background-color: var(--primary);
  border-radius: 50%;
  display: inline-block;
  margin: 0 8px;
}

.border {
  border-radius: 5px;
  height: 2px;
  background-color: var(--border);
  border: none;
  margin: 1.25rem 0;
}

.navlinks {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 1.25rem;
}

.navlinks li {
  opacity: 0.5;
  -webkit-transition: opacity 200ms ease-in-out;
  transition: opacity 200ms ease-in-out;
  cursor: pointer;
}

.navlinks li:first-child {
  opacity: 1;
  font-weight: bold;
}

.navlinks li:hover {
  opacity: 1;
}

.navlinks li + li {
  margin-left: 20px;
}

.date {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 0.85rem;
}

.date svg {
  margin-left: 5px;
  height: 1rem;
  width: 1rem;
}

.heading {
  font-weight: bold;
  font-size: 1.1rem;
}

.insights {
  margin: 2rem 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.insights .insight {
  width: 280px;
  padding: 1rem;
  border-radius: 8px;
  outline: 2px solid var(--border);
  -webkit-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}

.insights .insight:hover {
  color: white;
  background-color: var(--primary);
  outline: none;
}

.insights .insight .heading {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.insights .insight .heading .score {
  margin-left: auto;
}

.insights .insight .heading .score span {
  color: #44c790;
}

.insights .insight .heading span {
  font-size: 0.8rem;
}

.insight + .insight {
  margin-left: 1rem;
}

.number {
  font-size: 1.5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  font-weight: bold;
  margin-top: 15px;
}

.number .info {
  font-size: 0.75rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: normal;
}

.number .info svg {
  height: 15px;
  width: 15px;
}

@media (max-width: 1381px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight:nth-child(3) {
    margin-top: 1rem;
  }
}

@media (max-width: 990px) {
  .insights {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .insights .insight + .insight {
    margin: 0;
    margin-top: 1rem;
  }
}

@media (max-width: 740px) {
  .card {
    width: 90%;
  }
  .navlinks {
    display: none;
  }
}

@media (max-width: 545px) {
  .card__button button {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .card__button button span {
    display: block;
  }
  .card__button button svg {
    margin-right: 0;
  }
}

@media (max-width: 475px) {
  .card__button {
    display: block;
  }
}

</style>

<div class="card">
      <div class="card__header">
        <div class="card__profile">
          <img
            src="https://randomuser.me/api/portraits/men/52.jpg"
            alt="A man smiling"
          />
        </div>
        <div class="card__name">
          <h2>2CHEAP</h2>
          <div class="card__handle">
            <span class="handle">@2cheap</span>
            <span class="circle"></span>
            <span class="category"><?php if( $_SESSION["user"] === "superadmin"){ echo "CEO"; }else{ echo "Accountant"; } ?></span>
          </div>
        </div>
        <div class="card__button">
          <button onclick = "logout()"><span style="padding: 10%;" class="fa fa-sign-out" aria-hidden="true"></span><span>Logout</span></button>
        </div>
      </div>
      <hr class="border" />
      <div class="card__insights">
        <div class="card__heading">
          <div class="heading">Insights</div>
          <div class="date">
            <?php echo date('d-M-Y'); ?>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-chevron-down"
            >
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </div>
        <div class="insights">
          <div class="insight">
            <div class="heading">
              People Reached
              <div class="score">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 262.361 262.362"
                  width="8"
                  height="8"
                  fill="#44c790"
                >
                  <path
                    d="M286.935 197.287L159.028 69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233 1.807-12.85 5.424L5.424 197.287C1.807 200.904 0 205.186 0 210.134s1.807 9.233 5.424 12.847c3.621 3.617 7.902 5.425 12.85 5.425h255.813c4.949 0 9.233-1.808 12.848-5.425 3.613-3.613 5.427-7.898 5.427-12.847s-1.814-9.23-5.427-12.847z"
                  />
                </svg>
                <span>7%</span>
              </div>
            </div>
            <div class="number">
              1,090
              <div class="info">
                More Info
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-chevron-right"
                >
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="insight">
            <div class="heading">
              Post Engagement
              <div class="score">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 262.361 262.362"
                  width="8"
                  height="8"
                  fill="#44c790"
                >
                  <path
                    d="M286.935 197.287L159.028 69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233 1.807-12.85 5.424L5.424 197.287C1.807 200.904 0 205.186 0 210.134s1.807 9.233 5.424 12.847c3.621 3.617 7.902 5.425 12.85 5.425h255.813c4.949 0 9.233-1.808 12.848-5.425 3.613-3.613 5.427-7.898 5.427-12.847s-1.814-9.23-5.427-12.847z"
                  />
                </svg>
                <span>25%</span>
              </div>
            </div>
            <div class="number">
              305
              <div class="info">
                More Info
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-chevron-right"
                >
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="insight">
            <div class="heading">
              Page Likes
              <div class="score">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 262.361 262.362"
                  width="8"
                  height="8"
                  fill="#44c790"
                >
                  <path
                    d="M286.935 197.287L159.028 69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233 1.807-12.85 5.424L5.424 197.287C1.807 200.904 0 205.186 0 210.134s1.807 9.233 5.424 12.847c3.621 3.617 7.902 5.425 12.85 5.425h255.813c4.949 0 9.233-1.808 12.848-5.425 3.613-3.613 5.427-7.898 5.427-12.847s-1.814-9.23-5.427-12.847z"
                  />
                </svg>
                <span>18%</span>
              </div>
            </div>
            <div class="number">
              13
              <div class="info">
                More Info
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-chevron-right"
                >
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
    function logout(){
        $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "logout"},
      success: function(Data) {$("#tabBody").html(Data);}
    });
    }
    
    </script>