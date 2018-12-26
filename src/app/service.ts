import { Injectable } from "@angular/core";
import { HttpClient } from '@angular/common/http';
import { CommonConstants } from '../app/constants/constants';

@Injectable()

export class DataService {
    constructor(private httpClient: HttpClient) { }

    /*CRUD OPERATIONS FOR MASTER*/

    //postApicalls
    getData(url) {
        return this.httpClient.get(CommonConstants.BaseUrl + url);
    }
}