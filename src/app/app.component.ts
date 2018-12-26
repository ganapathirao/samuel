import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { DataService } from './service';
import { CommonConstants } from './constants/constants';
declare var google: any;
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [DataService]
})
export class AppComponent implements OnInit {
  title = 'app';
  bikeDetails: any;
  headingOfCrimeRateIndex: any;
  isWalkerScore: boolean;
  isBikeDetails: boolean;
  walkscore: number;
  riskIndex: any;
  constructor(
    private dataService: DataService) {

  }
  ngOnInit() {
    this.getTransactionDetails('clrsearch?');
    this.getScore('walkscore?');
    this.googleMapsIntialize();
  }

  /**Google maps intilaizing
   * 
   */
  googleMapsIntialize() {
    setTimeout(() => {
      var fenway = { lat: 37.869260, lng: -122.254811 };
      var map = new google.maps.Map(document.getElementById('map'), {
        center: fenway,
        zoom: 14
      });
      var panorama = new google.maps.StreetViewPanorama(
        document.getElementById('pano'), {
          position: fenway,
          pov: {
            heading: 34,
            pitch: 10
          }
        });
      map.setStreetView(panorama);
    }, 2000);
  }


  /**get TransactionDetails
   * 
   * @param url 
   */
  getTransactionDetails(url: string) {
    this.dataService.getData(url + "transaction_uid=" + CommonConstants.transaction_uid + "&" + "property_uid=" + CommonConstants.property_uid).subscribe((response: any) => {
      if (response.status) {
        if (response.crime_index_data.heading.length > 0) {
          this.headingOfCrimeRateIndex = response.crime_index_data.heading
        } else {
          this.headingOfCrimeRateIndex = [];
        }
        if (response.crime_index_data.rows.length > 0) {
          let objs = response.crime_index_data.rows.map(function (x: any) {
            return {
              clrIndex: x[0].toString(),
              cleveland: x[1].toString(),
              oh: x[2].toString(),
              states: x[3].toString()
            };
          });
          this.riskIndex = objs;
        } else {
          this.riskIndex = [];
        }
      } else {
        console.log("status not found");
      }
    });
  }

  /**get score
   * 
   * @param url 
   */
  getScore(url: string) {
    this.dataService.getData(url + "transaction_uid=" + CommonConstants.transaction_uid + "&" + "property_uid=" + CommonConstants.property_uid).subscribe((response: any) => {
      if (response.status) {
        if (response.bike) {
          this.isBikeDetails = true;
          this.bikeDetails = response.bike;
        } else {
          this.isBikeDetails = false;
        }
        if (response.walkscore) {
          this.isWalkerScore = true;
          this.walkscore = response.walkscore
        } else {
          this.isWalkerScore = false;
        }
      } else {
        console.log("status not found");
      }
    });
  }
}



