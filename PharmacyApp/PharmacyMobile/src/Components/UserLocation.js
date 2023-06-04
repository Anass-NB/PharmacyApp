
import { useEffect, useState } from 'react';
import * as Location from 'expo-location';

const UserLocation = () => {
  const [userLocation, setUserLocation] = useState(null)
  const [granted, setGranted] = useState(false)


  useEffect(() => {
    (async () => {
      let { status } = await Location.requestForegroundPermissionsAsync();
      if (status !== 'granted') {
        console.log('Permission to access location was denied');
        return ;
      }
      setGranted(true);
      
      let location = await Location.getCurrentPositionAsync({});
      setUserLocation(location.coords);
      console.log("User coords" +location.coords);
    })();
  }, []);
  return {location:userLocation,granted};
}

export default UserLocation;