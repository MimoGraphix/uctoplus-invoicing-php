<?php

namespace Uctoplus\API\Models;

/**
 * Class ApiModel
 * @package Uctoplus\API\Models
 */
abstract class ApiModel
{

    public function toArray()
    {
        return $this->_toArray( (array) $this );
    }

    public function _toArray( array $array )
    {
        $return = array();

        foreach ( $array as $key => $value )
        {
            if( strpos( $key, chr( 0 ) ) !== false )
            {
                $key = explode( chr( 0 ), $key);
                $key = $key[2];
            }

            if( is_array( $value ) )
            {
                $return[ $key ] = $this->_toArray( $value );
            }
            elseif( is_string( $key ) && $key[0] == "_" )
            {
                continue;
            }
            elseif( is_object( $value ) )
            {
                $return[ $key ] = $value->toArray();
            }
            else
                $return[ $key ] = $value;
        }

        return $return;
    }

    public function toJson()
    {
        return json_encode( $this->toArray() );
    }
}