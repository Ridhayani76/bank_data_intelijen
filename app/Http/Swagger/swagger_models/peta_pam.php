<?php

/**
  * @OA\Get(
  *      path="/v1/entities/peta-pam",
  *      operationId="browseD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Browse D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Returns list of D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/peta-pam/read?slug=peta-pam&id={id}",
  *      operationId="readD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Get D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis based on id",
  *      description="Returns D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/peta-pam/add",
  *      operationId="addD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Insert new D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Insert new D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-pam/edit",
  *      operationId="editD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Edit an existing D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Edit an existing D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-pam/delete",
  *      operationId="deleteD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Delete one record of D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Delete one record of D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-pam",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-pam/delete-multiple",
  *      operationId="deleteMultipleD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Delete multiple record of D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Delete multiple record of D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-pam",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-pam/sort",
  *      operationId="sortD.IN.5-PetadanSimbolSektorpadaBidangPengamananPembangunanStrategis",
  *      tags={"peta-pam"},
  *      summary="Sort existing D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      description="Sort existing D.IN.5 - Peta dan Simbol Sektor pada Bidang Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-pam",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="peta"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */