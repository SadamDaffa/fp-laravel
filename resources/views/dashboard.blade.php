<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <header>
            <ion-toolbar color="success">
              <ion-title color="light">Akun</ion-title>
            </ion-toolbar>
          </header>
          <ion-content>
            <div class="top">
              <div class="image">
                <img src="../../assets/img/icon/853f0db6fdacd96de18090fdc259b849.jpg">
              </div>
              <div class="desc">
                <h3>Solu Ali</h3>
                <p>Customer</p>
              </div>
              <div class="edit">
                <ion-button fill="clear" (click)="goToLoginPage()">
                  Logout
                  <ion-icon slot="end" name="log-out-outline"></ion-icon>
                </ion-button>
              </div>
            </div>
          
            <ion-list [inset]="true" routerLink="/booked-rooms">
              <ion-item [button]="true">
                <ion-icon color="success" slot="start" name="bed" size="large"></ion-icon>
                <ion-label>Pesanan Kamar</ion-label>
              </ion-item>
                <ion-item [button]="true">
                  <ion-icon color="success" slot="start" name="pizza" size="large"></ion-icon>
                  <ion-label>Pesanan Makanan</ion-label>
              </ion-item>
              <ion-item [button]="true">
                <ion-icon color="success" slot="start" name="wallet" size="large"></ion-icon>
                <ion-label>Metode Pembayaran</ion-label>
              </ion-item>
              <ion-item [button]="true">
                <ion-icon color="success" slot="start" name="key" size="large"></ion-icon>
                <ion-label>Ganti Password</ion-label>
              </ion-item>
            </ion-list>
          </ion-content>
          
    </title>
</head>
<body>
    
</body>
</html>